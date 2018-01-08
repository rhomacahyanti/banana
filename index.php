<?php get_header(); ?>

<!-- Carousel -->
<!-- Carousel slides -->
<div id="banana-carousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php
      $recent_posts = new WP_Query(array(
        'posts_per_page' => 4)
      );

      $count = 0;
      $bullets = "";

      if ($recent_posts->have_posts()):
        while ($recent_posts->have_posts()): $recent_posts->the_post(); ?>

          <div class="col-xs-12 col">
            <div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?>">
              <?php the_post_thumbnail('full'); ?>
              <div class="carousel-caption d-none d-md-block">
                <?php the_title(sprintf('<h3 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
                <small><?php the_category(' '); ?></small>
              </div>
            </div>
          </div>

          <?php $bullets .= '<li data-target="#banana-carousel" data-slide-to="'.$count.'" class="'; ?>
          <?php if($count == 0): $bullets .='active'; endif; ?>
          <?php  $bullets .= '"></li>'; ?>

          <?php
          $count++;
        endwhile;
      endif;
      wp_reset_postdata();
    ?>

    <!-- Indicators -->
    <ol class="carousel-indicators">
       <?php echo $bullets; ?>
    </ol>
  </div>

  <!-- Carousel control -->
  <a class="carousel-control-prev" href="#banana-carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#banana-carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Bootstrap cards to display posts -->
<div class="container" style="padding-top: 50px;">
  <div class="card" style="width: 18rem;">
    <?php if (have_posts()):
      while (have_posts()) : the_post(); ?>
      <img class="card-img-top" src="<?php the_post_thumbnail('thumbnail'); ?>">
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <small class="card-text">Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small><br>
        <small class="card-text">Category: <?php the_category(' '); ?></small>
      </div>
      <?php endwhile;
    endif;
    ?>
  </div>
</div>

<?php if (have_posts()):
  while (have_posts()) : the_post(); ?>
  <?php the_post_thumbnail(); ?>
  <h3><?php the_title(); ?></h3>
  <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small><br>
  <small>Category: <?php the_category(' '); ?></small>
  <p><?php the_content(); ?></p>
  <?php endwhile;
endif;
?>

<?php get_footer(); ?>
