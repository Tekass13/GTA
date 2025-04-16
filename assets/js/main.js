$(function () {
  var top = $(window).scrollTop();
  var navbar = $("nav.navbar");
  if (!top) {
    $(navbar).removeClass("scrolled");
  } else {
    $(navbar).addClass("scrolled");
  }
  $(window).scroll(function () {
    top = $(window).scrollTop();
    if (!top) {
      $(navbar).removeClass("scrolled");
    } else {
      $(navbar).addClass("scrolled");
    }
  });
});
