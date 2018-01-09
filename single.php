<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" style="padding-top: 60px;">

	<div class="row">
		<?php if( has_post_thumbnail() ): ?>

		<div class="col-xs-12 col-sm-6">
			<div><?php the_post_thumbnail('full'); ?></div>
    		<h3><?php the_title(); ?></h3>
    		<small>Posted on: <?php the_time('F j, Y')?>, at <?php the_time('g:i a')?>, in Category: <?php the_category(' ')?></small>
        <?php the_content(); ?>
		</div>

		<?php endif; ?>
	</div>
</article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
