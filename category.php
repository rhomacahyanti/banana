<?php get_header(); ?>

<?php
  $categories = get_the_category();
  $category_id = $categories[0]->cat_ID;
  $category_name = get_cat_name($category_id);
  $args = array ( 'category' => $category_id);
  $myposts = get_posts( $args );
?>

 <div container style="padding-top: 50px; padding-right: 30px;">
   <h4><?php $category_name ?></h4>
   <div class="row">
     <?php $i = 1; foreach( $myposts as $post ) :	setup_postdata($post); ?>
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
     <?php if ( $i % 3 === 0 ) { echo '</div><div class="row">'; } $i++; ?>
     <?php endforeach; ?>
   </div>
 </div>

<?php get_footer(); ?>
