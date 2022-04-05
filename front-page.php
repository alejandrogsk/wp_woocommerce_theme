<?php 
/**
 * This is the home of the site
 */
get_header();
?>
<main id="primary" class="site-main">
<section class="container-fluid p-0">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/bg-store.jpg" class="d-block w-100" alt="...">
        </a>
        <div class="carousel-caption d-none d-md-block">
            <h5 class="text-primary">First slide label</h5>
            <p class="text-primary">Some representative placeholder content for the first slide.</p>
        </div>
    </div>
    <div class="carousel-item">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/bg-store-2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Second slide label</h5>
        <p class="text-danger">Some representative placeholder content for the second slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<!-- Popular Products -->
<section class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Popular Products</h2>
            <p class="text-center w-50 mx-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <div class="py-5">
                <?php 
                    echo do_shortcode( '[products limit="4"]' ) 
                ?> 
            </div>
        </div>
        
    </div>
</section>

<!-- Categories -->
<section class="home-categories py-5">
  <div class="container">
    <h2 class="text-center">All Categories</h2>
    <p class="text-center w-50 mx-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
          
    <div class="row mt-5">
      <div class="categories__col col-12 col-md-4  mt-2">
        <a href="#" class="">
          <img src="<?php echo get_template_directory_uri();?>/assets/cat-t-shirts.jpg" alt="..." loading="lazy" />
          <span>Music</span>
        </a>
      </div>

      <div class="categories__col col-12 col-md-4  mt-2">
        <a href="#" class="">
          <img src="<?php echo get_template_directory_uri();?>/assets/cat-albums.jpg" alt="..." loading="lazy" />
          <span>Music</span>
        </a>
      </div>

      <div class="categories__col col-12 col-md-4  mt-2">
        <a href="#" class="">
          <img src="<?php echo get_template_directory_uri();?>/assets/cat-hoodies.jpg" alt="..." loading="lazy" />
          <span>Music</span>
        </a>
      </div>

      <div class="categories__col col-12 col-md-4 mt-2 mt-md-3">
        <a href="#" class="">
          <img src="<?php echo get_template_directory_uri();?>/assets/cat-hoodies-2.jpg" alt="..." loading="lazy" />
          <span>Music</span>
        </a>
      </div>

      <div class="categories__col col-12 col-md-8 mt-2 mt-md-3">
        <a href="#" class="">
          <img src="<?php echo get_template_directory_uri();?>/assets/banner.jpg" style="height:100%!important;" alt="..." loading="lazy" />
          <span>Music</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Popular Products -->
<section class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center">Hot Sale</h2>
            <p class="text-center w-50 mx-auto">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
            <div class="py-5">
                <?php 
                    echo do_shortcode( '[sale_products limit="4"]' ) 
                ?> 
            </div>
        </div>
        
    </div>
</section>
</main>
<?php
get_footer();