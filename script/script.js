window.addEventListener("scroll", function() {
  if (window.scrollY >= 50) {
    $('.navbar-default').css('background-color', '#fff');
    $('.navbar-brand').css('color', '#6E6F73');
    $('.nav-link').css('color', '#6E6F73');
  }
  else {
    $('.navbar-default').css('background-color', 'transparent');
    $('.navbar-brand').css('color', '#fff');
    $('.nav-link').css('color', '#fff');
  }
},false);
