// Navbar Transitions
$(document).ready(function() {
  window.addEventListener('scroll', function() {
    if (window.scrollY >= 50) {
      $('.navbar-default').css('background-color', '#fff')
      $('.navbar-default').css('border-bottom', 'solid #E5E5E5 1px')
      $('.navbar-brand').css('color', '#6E6F73')
      $('.icon-bar').removeClass('white-nav-button')
      $('.icon-bar').addClass('dark-nav-button')
      $('.nav-link').css('color', '#6E6F73')
    } else {
      $('.navbar-default').css('background-color', 'transparent')
      $('.navbar-default').css('border-bottom', 'solid rgba(0, 0, 0, 0.0) 1px')
      $('.navbar-brand').css('color', '#fff')
      $('.icon-bar').removeClass('dark-nav-button')
      $('.icon-bar').addClass('white-nav-button')
      $('.nav-link').css('color', '#fff')
    }
  }, false)
});

// Scroll on Click
$(document).ready(function() {
  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault()

    var target = this.hash,
      $target = $(target)
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top
    }, 900, 'swing', function() {
      window.location.hash = target
    })
  })
});

// Lazy Load Images
function isElementInViewport (el) {

    var rect = el.getBoundingClientRect();

    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
    );
}
  //these handlers will be removed once the images have loaded
window.addEventListener("DOMContentLoaded", lazyLoadImages);
window.addEventListener("load", lazyLoadImages);
window.addEventListener("resize", lazyLoadImages);
window.addEventListener("scroll", lazyLoadImages);

function lazyLoadImages() {
  var images = document.querySelectorAll("img[data-src]"),
      item;
  // load images that have entered the viewport
  [].forEach.call(images, function (item) {
    if (isElementInViewport(item)) {
      item.setAttribute("src",item.getAttribute("data-src"));
      item.removeAttribute("data-src")
    }
  })
  // if all the images are loaded, stop calling the handler
  if (images.length == 0) {
    window.removeEventListener("DOMContentLoaded", lazyLoadImages);
    window.removeEventListener("load", lazyLoadImages);
    window.removeEventListener("resize", lazyLoadImages);
    window.removeEventListener("scroll", lazyLoadImages);
  }
}
