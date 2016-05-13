var gulp = require('gulp'),
    gulpCopy = require('gulp-file-copy'),
    gutil = require('gulp-util'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    minifyCss = require('gulp-minify-css'),
    rename = require("gulp-rename"),
    sass = require('gulp-sass'),
    changed = require('gulp-changed'),
    browserSync = require('browser-sync').create();

gulp.task('serve', ['copy','sass','css','scripts'], function() {

    browserSync.init({
        server: "./public"
    });

    gulp.watch("./src/scss/**/*.scss", ['sass']);
    gulp.watch("./src/js/**/*.js", ['scripts']);
    gulp.watch("public/*.html").on('change', browserSync.reload);
    gulp.watch("public/js/*.js").on('change', browserSync.reload);
});

gulp.task('copy', function() {
    gulp.src('./bower_components/font-awesome/fonts/*')
        .pipe(changed('public/fonts/'))
        .pipe(gulp.dest('public/fonts/'))
});

gulp.task('sass', function() {
    return gulp.src("./src/scss/**/*.scss")
      .pipe(changed('./src/scss/**/*.scss'))
      .pipe(sass())
      .pipe(gulp.dest("public/css"))
      .pipe(minifyCss({compatibility: 'ie8'}))
      .pipe(rename('main.min.css'))
      .pipe(gulp.dest('./public/css/'))
      .pipe(browserSync.stream());
});

gulp.task('css', function() {
    return gulp.src([
      './bower_components/Swiper/dist/css/swiper.min.css'
    ])
      .pipe(changed('./public/css/'))
      .pipe(concat('vendor.css'))
      .pipe(gulp.dest('./public/css/'))
      .pipe(minifyCss({compatibility: 'ie8'}))
      .pipe(rename('vendor.min.css'))
      .pipe(gulp.dest('./public/css/'))
});

gulp.task('scripts', function() {
    return gulp.src([
      './bower_components/jquery/dist/jquery.min.js',
      './bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
      './bower_components/Swiper/dist/js/swiper.min.js',
      './src/js/classie.js',
      './src/js/modernizr.custom.js',
      './src/js/map.js',
      './src/js/main.js'
    ])
      .pipe(changed('./public/js/'))
      .pipe(concat('vendor.js'))
      .pipe(gulp.dest('./public/js/'))
      .pipe(uglify())
      .pipe(rename('vendor.min.js'))
      .pipe(gulp.dest('./public/js/'))
});

gulp.task('default', ['serve']);
