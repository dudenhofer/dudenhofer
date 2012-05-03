// $Id: script.js,v 1.8 2010/11/18 23:43:54 sociotech Exp $
(function ($) {

Drupal.behaviors.zondervanEqualheights = {
  attach: function (context, settings) {
    if (jQuery().equalHeights) {
      $("#header-top-wrapper div.equal-heights div.content").equalHeights();
      $("#header-group-wrapper div.equal-heights div.content").equalHeights();
      $("#preface-top-wrapper div.equal-heights div.content").equalHeights();
      $("#preface-bottom div.equal-heights div.content").equalHeights();
      $("#sidebar-first div.equal-heights div.content").equalHeights();
      $("#content-region div.equal-heights div.content").equalHeights();
      $("#node-top div.equal-heights div.content").equalHeights();
      $("#node-bottom div.equal-heights div.content").equalHeights();
      $("#sidebar-second div.equal-heights div.content").equalHeights();
      $("#postscript-top div.equal-heights div.content").equalHeights();
      $("#postscript-bottom-wrapper div.equal-heights div.content").equalHeights();
      $("#footer-wrapper div.equal-heights div.content").equalHeights();
    }
  }
};

Drupal.behaviors.zondervanIE6fixes = {
  attach: function (context, settings) {
    // IE6 & less-specific functions
    // Add hover class to main menu li elements on hover
    if ($.browser.msie && ($.browser.version < 7)) {
      $('form input.form-submit').hover(function() {
        $(this).addClass('hover');
        }, function() {
          $(this).removeClass('hover');
      });
      $('#search input#search_header').hover(function() {
        $(this).addClass('hover');
        }, function() {
          $(this).removeClass('hover');
      });
    };
  }
};

Drupal.behaviors.zondervanOverlabel = {
  attach: function (context, settings) {
    if (jQuery().overlabel) {
      $("div.zondervan-horiz-login label").overlabel();
    }
  }
};

Drupal.behaviors.zondervanGridMask = {
  attach: function (context, settings) {
    // Exit if grid mask not enabled
    if ($('body.grid-mask-enabled').size() == 0) {
      return;
    }

    var grid_width_pos = parseInt($('body').attr('class').indexOf('grid-width-')) + 11;
    var grid_width = $('body').attr('class').substring(grid_width_pos, grid_width_pos + 2);
    var grid = '<div id="grid-mask-overlay" class="full-width"><div class="region">';
    for (i = 1; i <= grid_width; i++) {
      grid += '<div class="block grid' + grid_width + '-1"><div class="inner"></div></div>';
    }
    grid += '</div></div>';
    $('body.grid-mask-enabled').prepend(grid);
    $('#grid-mask-overlay .region').addClass('grid' + grid_width + '-' + grid_width);
    $('#grid-mask-overlay .block .inner').height($('body').height());
  }
};

Drupal.behaviors.zondervanGridMaskToggle = {
  attach: function (context, settings) {
    // Exit if grid mask not enabled
    if ($('body.grid-mask-enabled').size() == 0) {
      return;
    }

    $('body.grid-mask-enabled').prepend('<div id="grid-mask-toggle">grid</div>');
    $('div#grid-mask-toggle')
    .toggle( function () {
      $(this).toggleClass('grid-on');
      $('body').toggleClass('grid-mask');
    },
    function() {
      $(this).toggleClass('grid-on');
      $('body').toggleClass('grid-mask');
    });
  }
};

Drupal.behaviors.zondervanJscrollPane = {
   attach: function(context, settings) {
   		//Creating customizable scrollbars with jScrollPane jQuery library.
//     $('.contributor-list #author-scroll').jScrollPane({
//        showArrows: true, 
//        hijackInternalLinks: true, 
//        verticalDragMinHeight: 21, 
//        verticalDragMaxHeight: 21
//     });
//     $('.recently-published .view-content').jScrollPane({showArrows: true, verticalDragMinHeight: 21, verticalDragMaxHeight: 21});

     // QUICKTABS --- these require a different approach.
     // Display hidden quicktab content so scrollbar can be applied
     $('#quicktabs_tabpage_front_quick_tab_1').removeClass('quicktabs-hide');

     //Apply quicktab scrollbars here
     $('#quicktabs-front_quick_tab .view-products-browsing').jScrollPane({showArrows: true, verticalDragMinHeight: 21, verticalDragMaxHeight: 21});

     // Return hidden quicktab content to original state
     $('#quicktabs_tabpage_front_quick_tab_1').addClass('quicktabs-hide');

     // Scroll for Retailers popup
    $('#buy-wrapper .list').jScrollPane({showArrows: true, verticalDragMinHeight: 21, verticalDragMaxHeight: 21 });
    $('#buy-wrapper').hide();
   }
 };

Drupal.behaviors.zondervanModal = {
   attach: function(context) {
    var $buy_options = $('#buying-options', context);
    if (!$buy_options.length) {
      return;
    }

    //Creating popup for buy now links
    $buy_options.dialog({
      width:644,
      draggable: false,
      resizable: false,
      dialogClass: 'buy-popup',
      autoOpen: false,
      modal: true
    });

    // buy button is outside of buy options
    $('#buy-button').click(function() {
      $('#buying-options').dialog( 'open');
      return false;
    });
   }
 };
Drupal.behaviors.zondervanNewsletter = {
  attach: function(context) {
    // NEWSLETTER
    var $znews_options = $('#newsletter-popup', context);
    if (!$znews_options.length) {
      return;
    }

    //Creating popup for newsletter checkboxes
    $znews_options.dialog({
      width:644,
      draggable: false,
      resizable: false,
      dialogClass: 'newsletter-popup',
      autoOpen: false,
      modal: true
    });

    // continue button is outside of buy options
    $('#continue').click(function() {
      $('#newsletter-popup').button().dialog( 'open');
    });
    $('#newsletter-wrapper').hide();
  }
};
Drupal.behaviors.zondervanStaticStyles = {
  attach: function(context) { 
    $('.node-type-static-page .zfirstmain-main ol li').wrapInner('<span />');
    $('.node-type-static-page .zfirstmain-main tr:even').addClass('alt');
    $('.page-taxonomy #main-menu #block-system-main-menu ul.menu li.menu-browse a').addClass('active');
    $('.page-product #main-menu #block-system-main-menu ul.menu li.menu-browse a').addClass('active');
  } 
};
// ---- Too big of a list, causes script load errors in IE.
//$(function()
//{
//  $('.contributor-list #author-scroll').jScrollPane(
//    {
//      showArrows: true,
//      hijackInternalLinks: true,
//      verticalDragMinHeight: 21, 
//      verticalDragMaxHeight: 21
//    }
//  );
//});


})(jQuery);