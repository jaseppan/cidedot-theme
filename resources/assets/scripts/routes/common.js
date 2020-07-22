export default {
  init() {
    // JavaScript to be fired on all pages
    $('#navbar-toggler').on('click', function () {
      $('.animated-icon').toggleClass('open');
    });
    $('.second-button').on('click', function () {
  
      $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {
  
      $('.animated-icon3').toggleClass('open');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
