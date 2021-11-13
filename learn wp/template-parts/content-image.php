<article>
    <h2> <?php the_title(); ?></h2>                   
    <?php the_post_thumbnail( array(275,275) );?>                  
    <p>Posted in <?php echo get_the_date();  ?> by <?php the_author() ?></p>            
                  
                   
                     
     <p> <?php the_content(); ?> </p>    
     <p>Categories: <?php the_category(); ?></p>  
     
     <p><?php the_tags('Tags :',','); ?></p>                   
</article>           