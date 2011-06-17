<?php
// $Id: node.tpl.php,v 1.2.4.13 2010/12/03 06:15:05 jmburnz Exp $
?>
<article id="article-<?php print $node->nid; ?>" class="<?php if($page):print 'full-node ';endif;?><?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $unpublished; ?>
  <?php if($page):?>
  <?php if($content['field_category']):?><div class="categories"><?php print render($content['field_category']); ?></div><?php endif;?>
	<?php if($content['field_topics']):?><div class="topics"><?php print render($content['field_topics']); ?></div><?php endif;?>
	<?php if($content['field_image']):?>	
		<div id="dude-image" class="image-wrapper">
			<?php print render($content['field_caption']);?>
			<?php print render($content['field_image']); ?>
		</div>
	<?php endif;?>
	<?php if($content['field_amazon_code']):?>
			<div class="amazon">
				<iframe src="http://rcm.amazon.com/e/cm?lt1=_blank&bc1=FFFFFF&IS2=1&bg1=FFFFFF&fc1=000000&lc1=0879BF&t=dudenhofercom-20&o=1&p=8&l=as4&m=amazon&f=ifr&ref=ss_til&asins=<?php print render($content['field_amazon_code']['#items']['0']['value']);?>" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
			</div>  	
		<?php endif;?>
		<?php if($type != 'page'):?>
		<div class="date-tab">
		<div class="month"><?php print $month;?></div>
		<div class="day"><?php print $day;?></div>
		</div>
		<?php endif;?>
  <h1 id="page-title"><?php print $title;?></h1>
  <h2 class="subtitle"><?php print render($content['field_subtitle']); ?></h2>
  <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
  <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=205735869471538&amp;xfbml=1"></script><fb:like href="<?php print $domain.$node_url;?>" send="true" width="450" show_faces="false" font=""></fb:like>
  <?php if($content['field_amazon_code']):?>
  
  <?php endif;?>
  <?php endif;?>

  <?php if ($title && !$page): ?>
  	<?php print render($content['field_image']); ?>
  		<?php if($content['field_media']):?>
  			<a class="video-link" title="<?php print $title; ?>" rel="shadowbox[videos]" href="http://www.youtube.com/embed/<?php print render($content['field_media']['0']['file']['#items']['0']['filename']); ?>?width=640&height=390&iframe=true">Watch Video</a>
  		<?php hide($content['field_media']);?>
  	<?php endif;?>
  	
  	<div class="date-tab">
  		<div class="month"><?php print $month;?></div>
			<div class="day"><?php print $day;?></div>
		</div>
    <header>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1<?php print $title_attributes; ?>>
          <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
        </h1>
      <?php endif; ?>
      <h2 class="subtitle"><?php print render($content['field_subtitle']); ?></h2>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>

  <div<?php print $content_attributes; ?>>
  <?php
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_amazon_code']);
    print render($content);
  ?>
  
  </div>
  <?php if (!empty($content['links'])): ?>
  	<?php if(!$page):?>
  	<div class="teaser-links">
  		<div class="more"><a href="<?php print $node_url;?>">Read More</a></div>
  		<div class="fb-comment-count">
  			<iframe src="http://www.facebook.com/plugins/comments.php?href=<?php print $domain.$node_url;?>&permalink=1" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:130px; height:16px;" allowTransparency="true"></iframe> 
  		</div>
  	</div>
  	<?php else:?>
    <nav class="clearfix"><?php unset($content['links']['#links']['node-readmore']); print render($content['links']); ?></nav>
    <?php endif;?>
  <?php endif; ?>

  <?php // HIDING BECAUSE OF FB COMMENTS - print render($content['comments']); ?>
  <?php if($page && $type != 'page'):?>
  <div class="fb-comments">
  <div class="message">Do you have an opinion or something to say about this?</div>
  <div class="count"><fb:comments-count href="<?php print $domain.$node_url;?>"></fb:comments-count> comments</div>
  <h2>Leave A Comment</h2>
  <div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="<?php print $domain.$node_url;?>" num_posts="10" width="690"></fb:comments>
  </div>
  <?php endif;?>
  <?php //dpm(get_defined_vars());?>
</article>
