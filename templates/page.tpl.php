<?php
// $Id: page.tpl.php,v 1.2.4.20 2010/12/01 21:47:53 jmburnz Exp $
?>
<?php if($page['control_panel']):?>
	<div id="control-panel">
		<?php render($page['control_panel']);?>
	</div>
<?php endif;?>
<div id="page" class="container">

  <?php print render($page['leaderboard']); ?>
  
	<?php print render($page['sidebar_first']); ?>

  <header class="clearfix">

    <?php if ($linked_site_logo): ?>
      <div id="logo"><?php print $linked_site_logo; ?></div>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <hgroup<?php if (!$site_slogan && $hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>>
        <?php if ($site_name): ?>
          <h1 id="site-name"<?php if ($hide_site_name): ?> class="<?php print $visibility; ?>"<?php endif; ?>><?php print $site_name; ?></h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 id="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
      </hgroup>
    <?php endif; ?>

  </header>
  <div id="main-column">
  	<div class="main-column-inner">
  	<?php print $messages; ?>
  	<?php print render($page['help']); ?>
  	<?php print render($page['secondary_content']); ?>
  	
  <div id="columns"><div class="columns-inner clearfix">
    <div id="content-column"><div class="content-inner">

      <?php print render($page['highlighted']); ?>

      <?php $tag = $title ? 'section' : 'div'; ?>
      <<?php print $tag; ?> id="main-content">

        <?php if ($title || $primary_local_tasks || $secondary_local_tasks || $action_links): ?>
          <header>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
            	<?php if($node == ''):?>
              	<h1 id="page-title"><?php print $title; ?></h1>
              <?php else: hide($title); endif;?>
            <?php endif; ?>
            <?php print render($title_suffix); ?>

            <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
              <div id="tasks">
                <?php if ($primary_local_tasks): ?>
                  <ul class="tabs primary"><?php print render($primary_local_tasks); ?></ul>
                <?php endif; ?>
                <?php if ($secondary_local_tasks): ?>
                  <ul class="tabs secondary"><?php print render($secondary_local_tasks); ?></ul>
                <?php endif; ?>
                <?php if ($action_links): ?>
                  <ul class="action-links"><?php print render($action_links); ?></ul>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </header>
        <?php endif; ?>

        <div id="content"><?php print render($page['content']); ?></div>

      </<?php print $tag; ?>>

      <?php print render($page['content_aside']); ?>

    </div></div>

    <?php print render($page['sidebar_second']); ?>

  </div></div>

	</div></div>
  <?php if ($page['footer'] || $page['tertiary_content']): ?>
  
    <footer>
    	<?php print render($page['tertiary_content']); ?>
    	<?php print render($page['footer']); ?>
    </footer>
  <?php endif; ?>
<?php //dpm($node);?>
</div>
