$(document).ready(function(){
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
  });

  $('#nav a').click(function(){
    var anchor = $(this).attr('href');
    $('html, body').animate({ scrollTop: $(anchor).offset().top - 78 }, 300); return false;
  });

});
