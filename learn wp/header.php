<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn WP</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


  <p>think about it because it means they are ready to learn</p>  
  <header>
      <section class="top-bar">
          <div class="row">
          <div class="social-media-icons col-xl-10 col-md-8 col-sm-8 col-6">Icons</div>
          <div class="search col-xl-2 col-md-4 col-6 text-right">Search</div>
          </div>
      </section>

      <section class="menu-area">
          <div class="row">
          <section class="logo col-md-2 col-sm-12 col-12 text-center">Logo</section>
          <nav class="main-manu col-md-10 text-right">
             <?php wp_nav_menu(array('theme_location'=>'Main Menu')); ?>
          </nav>
          </div>

       </section>
  </header>