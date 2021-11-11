
<?php 

/*
Template Name: General Temaplate
*/

?>

<?php get_header(); ?>
<img  class="img-fluid" src="<?php header_image() ?>" height="<?php echo get_custom_header()->hegth; ?>" width="<?php echo get_custom_header()->width;?>" alt="">
  <div class="content-area">
      <main>
          <section class="slide">
              <div class="container">
                  <div class="row">
                   
                  </div>
              </div>
        
          </section>
          <section class="services">
              <div class="container">
                  <div class="row">
                      <!-- Services -->
                  </div>
              </div>
          </section>
          <section class="middle-area">
              <div class="container">
                  <div class="row">
              <aside class="sidebar">

              </aside>
              <div class="news">
                  <?php
                  if(have_posts()):
                    while( have_posts() ): the_post(); 
                   ?>

                   <article>
                       <h2> <?php the_title(); ?></h2>
        
                       <p> <?php the_content(); ?> </p>
                    
                   </article>

                   <?php
                   endwhile;
                    else:
                    ?>
                    <p>There is nothing to be displayed</p>
                    <?php endif; ?>


              </div>
            </div>   
        </div>
          </section>
          <div class="container">
            <section class="map"></section>
          </div>

      </main>
 </div>

<?php get_footer() ?>