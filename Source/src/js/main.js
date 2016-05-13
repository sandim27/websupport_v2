$(document).ready(function(){
  $('#nav a').click(function(){
    var anchor = $(this).attr('href');
    $('html, body').animate({ scrollTop: $(anchor).offset().top - 78 }, 300); return false;
  });
});
