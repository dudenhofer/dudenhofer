<?php
// $Id: template.php,v 1.2.4.8 2010/12/18 06:35:00 jmburnz Exp $

/**
 * Add the Style Schemes if enabled.
 * NOTE: You MUST make changes in your subthemes theme-settings.php file
 * also to enable Style Schemes.
 */
/* -- Delete this line if you want to enable style schemes.
// DONT TOUCH THIS STUFF...
function get_at_styles() {
  $scheme = theme_get_setting('style_schemes');
  if (!$scheme) {
    $scheme = 'style-default.css';
  }
  if (isset($_COOKIE["atstyles"])) {
    $scheme = $_COOKIE["atstyles"];
  }
  return $scheme;
}
if (theme_get_setting('style_enable_schemes') == 'on') {
  $style = get_at_styles();
  if ($style != 'none') {
    drupal_add_css(path_to_theme() . '/css/schemes/' . $style, array('group' => CSS_THEME, 'preprocess' => TRUE));
  }
}
// */

/**
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function to match your subthemes name,
 *    e.g. if you name your theme "themeName" then the function
 *    name will be "themeName_preprocess_hook". Tip - you can
 *    search/replace on "dudenhofer".
 * 2. Uncomment the required function to use.
 */

/**
 * Override or insert variables into all templates.
 */
/* -- Delete this line if you want to use these functions
function dudenhofer_preprocess(&$vars, $hook) {
}
function dudenhofer_process(&$vars, $hook) {
}
// */

/**
 * Override or insert variables into the html templates.
 */
/* -- Delete this line if you want to use these functions
function dudenhofer_preprocess_html(&$vars) {
  // Uncomment the folowing line to add a conditional stylesheet for IE 7 or less.
  // drupal_add_css(path_to_theme() . '/css/ie/ie-lte-7.css', array('weight' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
}
function dudenhofer_process_html(&$vars) {
}
// */

/**
 * Override or insert variables into the page templates.
 */
/* -- Delete this line if you want to use these functions
function dudenhofer_preprocess_page(&$vars) {
}
function dudenhofer_process_page(&$vars) {
}
// */

/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function dudenhofer_preprocess_node(&$vars) {
}
function dudenhofer_process_node(&$vars) {
}
// */

/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function dudenhofer_preprocess_comment(&$vars) {
}
function dudenhofer_process_comment(&$vars) {
}
// */

/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function dudenhofer_preprocess_block(&$vars) {
}
function dudenhofer_process_block(&$vars) {
}
// */
function dudenhofer_preprocess_node(&$vars) {

      $node = $vars['node'];

      // Variables for the calendar date display.
      $vars['month'] = date('M', $node->created);
      $vars['day'] = date('j', $node->created);
      $vars['year'] = date('Y', $node->created);
      $vars['domain'] = 'http://'.$_SERVER['HTTP_HOST'];

}
function dudenhofer_theme($existing, $type, $theme, $path) {
  return array(
    'node_form' => array(
        'arguments' => array('form' => NULL),
        'path' => drupal_get_path('theme', 'dudenhofer') . '/templates',
      'template' => 'node-post-form',
        'render element' => 'form',
    ),
  );
}