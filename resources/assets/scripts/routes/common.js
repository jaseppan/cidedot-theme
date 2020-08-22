export default {
  init() {
    // JavaScript to be fired on all pages
    $('#navbar-toggler').on('click', function () {
      $('.animated-icon').toggleClass('open');
      $('#site-identity').toggleClass('text-center');
      $('#site-identity .divider').toggleClass('hidden');
      $('#site-identity').toggleClass('collapsed');
    });
    $(document).ready(function() {
      $('.animated-icon').addClass('notice');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
