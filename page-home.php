<?php get_header(); ?>

<!-- Carousel -->
<!-- Carousel slides -->
<div class = "row" style="padding-top: 40px;">
<div class="col-xs-12">
  <div id="banana-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php

        $recent_posts = new WP_Query(array(
          'type' => 'post',
          'posts_per_page' => 4)
        );

        $count = 0;
        $bullets = "";

        if ($recent_posts->have_posts()):
          while ($recent_posts->have_posts()): $recent_posts->the_post(); ?>

            <div class="carousel-item <?php if($count == 0): echo 'active'; endif; ?>">
              <?php the_post_thumbnail('full'); ?>
              <div class="carousel-caption d-none d-md-block">
                <?php the_title(sprintf('<h3 class="post-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h3>' ); ?>
                <small><?php the_category(' '); ?></small>
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
    </div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
       <?php echo $bullets; ?>
    </ol>

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
</div>
</div>

<!-- Tips dan trik -->
<?php
	$tipsDanTrikPost = new WP_Query('type=post&posts_per_page=-3&category_name=tips-dan-trik');
?>

<div class="container" style="padding-top: 50px; padding-right: 30px;">
  <h4>TIPS DAN TRIK</h4>
  <div class="row">
    <?php if ($tipsDanTrikPost->have_posts()): ?>
    <?php $i = 1; while ($tipsDanTrikPost->have_posts()) : $tipsDanTrikPost->the_post(); ?>
    <div class="col-xs-3">
      <div class="card" style="width: 18rem; height: 22rem; margin-bottom: 40px; margin-right: 30px;">
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
<!-- End of tips and trik -->

<!-- Informasi -->
<?php
	$informasiPost = new WP_Query('type=post&posts_per_page=-3&category_name=informasi');
?>

<div class="container" style="padding-top: 50px; padding-right: 30px;">
  <h4>INFORMASI</h4>
  <div class="row">
    <?php if ($informasiPost->have_posts()): ?>
    <?php $i = 1; while ($informasiPost->have_posts()) : $informasiPost->the_post(); ?>
    <div class="col-xs-3">
      <div class="card" style="width: 18rem; height: 22rem; margin-bottom: 40px; margin-right: 30px;">
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
<!-- End of Informasi -->

<!-- Tutorial -->
<?php
	$tutorialPost = new WP_Query('type=post&posts_per_page=-3&category_name=tutorial');
?>

<div class="container" style="padding-top: 50px; padding-right: 30px;">
  <h4>TUTORIAL</h4>
  <div class="row">
    <?php if ($tutorialPost->have_posts()): ?>
    <?php $i = 1; while ($tutorialPost->have_posts()) : $tutorialPost->the_post(); ?>
    <div class="col-xs-3">
      <div class="card" style="width: 18rem; height: 22rem; margin-bottom: 40px; margin-right: 30px;">
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
<!-- End of tutorial -->

<?php /*if (have_posts()):
  while (have_posts()) : the_post(); ?>
  <?php the_post_thumbnail(); ?>
  <h3><?php the_title(); ?></h3>
  <small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></small><br>
  <small>Category: <?php the_category(' '); ?></small>
  <p><?php the_content(); ?></p>
  <?php endwhile;
endif;*/
?>

<?php get_footer(); ?>
