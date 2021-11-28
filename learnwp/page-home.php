<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slide</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<h1>Our services</h1>
					<div class="row">
						 <div class="col-sm-4">
							 <div class="service-item">
								 <?php
								 if(is_active_sidebar('service-1')){
									 dynamic_sidebar('service-1');
								 }   
								  ?>
							 </div>
						 </div>
						 <div class="col-sm-4">
							 <div class="service-item">
								 <?php
								 if(is_active_sidebar('service-2')){
									 dynamic_sidebar('service-2');
								 }   
								  ?>
							 </div>
						 </div>
						 <div class="col-sm-4">
							 <div class="service-item">
								 <?php
								 if(is_active_sidebar('service-3')){
									 dynamic_sidebar('service-3');
								 }   
								  ?>
							 </div>
						 </div>
						

					</div>
				</div>				
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-3 h-100">

							<?php 
							
							// Require a file called sidebar-home.php
							get_sidebar( 'home' ); 

							?>
								
						</aside>



						<div class="news col-md-9">
						<div class="row">
						<div class="container">
							<?php 
							$featured = new WP_Query('post_type=post&posts_per_page=1&cat=45,42');
							if($featured->have_posts()):
								while($featured->have_posts()): $featured->the_post();
						    ?>


							<?php 			
							endwhile;
							wp_reset_postdata();
						endif;
							?>
						</div>	
						</div>

						</div>							
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Map</div>
				</div>				
			</section>
		</main>
	</div>
<?php get_footer(); ?>