(function ($) {
  Drupal.behaviors.dudenhofer = {
    attach: function(context) {

      $('.full-node .field-name-field-image a').append('<div class="zoom" />');

    }
  };

})(jQuery);