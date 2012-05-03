(function ($) {
  Drupal.behaviors.dudenhofer = {
    attach: function(context) {

      $('.full-node .field-name-field-image a').append('<div class="zoom" />');

    }
  };

Drupal.behaviors.jscrollPane = {
   attach: function(context, settings) {
   		//Creating customizable scrollbars with jScrollPane jQuery library.
     $('#content #article-34.full-node ul.listnav').jScrollPane({
        showArrows: true, 
        hijackInternalLinks: true, 
        verticalDragMinHeight: 21, 
        verticalDragMaxHeight: 21
     });
     $('.recently-published .view-content').jScrollPane({showArrows: true, verticalDragMinHeight: 21, verticalDragMaxHeight: 21});
   }
 };

})(jQuery);