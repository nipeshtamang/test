
jQuery(document).ready(function( $ ) {

  $('a[href*="#"]:not([href="#"])').click(function() {

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);

        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top-71
            }, 1000);
            return false;
        }
    }
});

});

(function($, window, document, undefined) {
  'use strict';

  // init cubeportfolio
  $('#js-grid-masonry').cubeportfolio({
      filters: '#js-filters-masonry',
      layoutMode: 'grid',
      defaultFilter: '*',
      animationType: 'slideDelay',
      gapHorizontal: 20,
      gapVertical: 20,
      gridAdjustment: 'responsive',
      mediaQueries: [{
          width: 1500,
          cols: 5,
      }, {
          width: 1100,
          cols: 4,
      }, {
          width: 800,
          cols: 3,
      }, {
          width: 480,
          cols: 2,
          options: {
              caption: '',
              gapHorizontal: 10,
              gapVertical: 10,
          }
      }],
      caption: 'overlayBottomAlong',
      displayType: 'bottomToTop',
      displayTypeSpeed: 100,

      // lightbox
      lightboxDelegate: '.cbp-lightbox',
      lightboxGallery: true,
      lightboxTitleSrc: 'data-title',
      lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
  });
})(jQuery, window, document);







