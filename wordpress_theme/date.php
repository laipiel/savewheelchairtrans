<?php get_header(); ?>
<div class='container sentence page-picture'>
  <div class='row-fluid'>
  	<div class='span8'>
  	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  	  <div class='pointbox aboutbox'>
  	  	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><em><?php the_time('l F jS, Y'); ?></em></p>
        <div class="fb-like" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
        <div style='padding-top:1px' class="g-plusone" data-size="small" data-href="<?php the_permalink(); ?>"></div>
        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>">Tweet</a>
        <hr>
        <?php the_excerpt(); ?>
        <a href="<?php echo get_permalink(); ?>"> Read More...</a>
  	  </div>
  	  <?php endwhile; else: ?>
  	  <div class='pointbox aboutbox'>
        <p><?php _e('Sorry, this page does not exist.'); ?></p>
      </div>
      <?php endif; ?>
  	</div>
  	<div class='span4'>
  	  <div class='pointbox aboutbox'>
  	  	<?php get_sidebar(); ?>
  	  </div>
  	</div>
  </div>
</div>
<?php get_footer(); ?>