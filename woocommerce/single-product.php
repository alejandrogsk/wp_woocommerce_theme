<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); 

$product = wc_get_product( $post->ID );
?>
<main class="container-fluid">
	<section class="container row">
		<div class="col-12 col-lg-6">
			<div></div>
			<div></div>
		</div>
		<div class="col-12 col-lg-6 ">
			<?php woocommerce_breadcrumb() ?>
			<h1>Esta es mi tienda </h1>
			<h1><?php $product->get_name() ?></h1>
			<p><?php  $product->get_description(); ?></p>

			<?php//echo wc_display_product_attributes( $product );?>
		</div>
	</section>
	<?php

  
// Get Product General Info
$product->get_type();
$product->get_name();
$product->get_slug();
$product->get_date_created();
$product->get_date_modified();
$product->get_status();
$product->get_featured();
 $product->get_catalog_visibility();
 $product->get_description();
 $product->get_short_description();
 $product->get_sku();
 $product->get_menu_order();
$product->get_virtual();
get_permalink( $product->get_id() );
  
// Get Product Prices
  
$product->get_price();
$product->get_regular_price();
$product->get_sale_price();
$product->get_date_on_sale_from();
$product->get_date_on_sale_to();
$product->get_total_sales();
  
// Get Product Tax, Shipping & Stock
  
$product->get_tax_status();
$product->get_tax_class();
$product->get_manage_stock();
$product->get_stock_quantity();
$product->get_stock_status();
$product->get_backorders();
$product->get_sold_individually();
$product->get_purchase_note();
$product->get_shipping_class_id();
  
// Get Product Dimensions
  
$product->get_weight();
$product->get_length();
$product->get_width();
$product->get_height();
$product->get_dimensions();
  
// Get Linked Products
  
$product->get_upsell_ids();
$product->get_cross_sell_ids();
$product->get_parent_id();
  
// Get Product Variations and Attributes
 
$product->get_children(); // get variations
$product->get_attributes();
$attrs = $product->get_default_attributes();
$attributes = $product->get_attributes();
// Get Product Taxonomies

$product->get_categories();
$product->get_category_ids();
$product->get_tag_ids();
  
// Get Product Downloads
  
$product->get_downloads();
$product->get_download_expiry();
$product->get_downloadable();
$product->get_download_limit();
  
// Get Product Images
  
$product->get_image_id();
$product->get_image();
$product->get_gallery_image_ids();
  
// Get Product Reviews
  
$product->get_reviews_allowed();
$product->get_rating_counts();
$product->get_average_rating();
$product->get_review_count();
	?>


</main>
<?php
get_footer(  );