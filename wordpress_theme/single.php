<?php get_header(); ?>
<div class='container sentence page-picture'>
  <div class='row-fluid'>
    <div class='span8'>
      <div class='pointbox aboutbox'>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <p><em><?php the_time('l F jS, Y'); ?></em></p>
          <div class="fb-like" data-href="<?php echo get_permalink($id); ?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
          <div style='padding-top:1px' class="g-plusone" data-size="small" data-href="<?php echo get_permalink($id); ?>"></div>
          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>">Tweet</a>
          <hr>
          <?php the_content(); ?>
          <hr>
        <?php endwhile; else: ?>
          <p><?php _e('Sorry, this page does not exist.'); ?></p>
        <?php endif; ?>
      </div>
    </div>
    <div class='span4'>
      <div class='pointbox aboutbox'>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>