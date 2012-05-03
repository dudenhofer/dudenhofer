<?php
// $Id: html.tpl.php,v 1.1.2.13 2010/12/13 22:03:04 jmburnz Exp $
?>
<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<script type="text/javascript">var switchTo5x=true;</script><script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'960f5a91-13d0-4551-886f-077002b28ba6'});</script>
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php if (arg(0) == 'node'):?>
<?php $node = node_load(arg(1));?>
<link rel="image_src" href="http://dudenhofer.com/sites/default/files/styles/main_image/public/<?php print $node->field_image['und'][0]['filename'] ;?>" />
<?php else: ?>
<link rel="image_src" href="<?php print base_path().path_to_theme();?>/screenshot.png" />
<?php endif; ?>


</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
</body>
</html>