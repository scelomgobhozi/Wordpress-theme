<article <?php post_class( array ('class'=>'featured')); ?>>

	<h2><?php the_title(); ?></h2>
    
     <div class="thumbnail">
	<?php the_post_thumbnail('large', array('class'=>'img-fluid') ); ?>
     </div>
	<div class="meta-info">

		<p> <span>by <?php the_author_posts_link(); ?></span> 

		<span>Categories: <?php the_category( ' ' ); ?></span> 

		<span> <?php the_tags( 'Tags: ', ', ' ); ?></span></p>		
       
	</div>
     <p> <span> Posted in <?php echo get_the_date(); ?></span> </p>
	<p><?php the_excerpt(); ?></p>

</article>