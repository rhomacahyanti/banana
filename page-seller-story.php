<?php get_header(); ?>

<!-- Seller story -->
<?php
	$sellerStoryPost = new WP_Query('type=post&category_name=seller-story');
?>

<div container style="padding-top: 50px; padding-right: 30px;">
  <h4>SELLER STORY</h4>
  <div class="row">
    <?php if ($sellerStoryPost->have_posts()): ?>
    <?php $i = 1; while ($sellerStoryPost->have_posts()) : $sellerStoryPost->the_post(); ?>
    <div class="col-xs-3">
      <div class="card" style="width: 18rem; height: 22rem; margin-bottom: 40px; margin-right: 20px;">
        <?php if(has_post_thumbnail() ) the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
        <div class="card-body">
          <?php the_title(sprintf('<h5 class="card-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h5>' ); ?>
          <small class="card-text">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small><br>
          <small class="card-text">Category: <?php the_category(' '); ?></small>
        </div>
      </div>
    </div>
    <?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } ?>
    <?php $i++; endwhile; wp_reset_query();
    endif; ?>
  </div>
</div>
<!-- End of seller-story -->

<?php get_footer(); ?>
