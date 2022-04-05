<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package storeags
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'storeags'); ?></a>


		<!--This is for the bar at the top-->
		<div class="announcement-bar">
			<div class="container">
				<div class="row py-2">
					<div class="col-md-4">
						<ul class="announcement-bar__ul">
							<li>
								<i class="bi bi-arrow-right rounded-circle bg-primary-light"></i>
								<a class="ml-2 text-decoration-none" href="tel: +54 343 4807395">+54 343 4807395</a>
							</li>
							<li>
								<i class="bi bi-envelope-check rounded-circle text-primary bg-primary-light p-2"></i>
								<a class="text-decoration-none" href="mailto:storeags.com">storeags.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-8 d-flex justify-content-end bg-secondary mt-2 mt-md-0">
						<ul class="announcement-bar__ul">
							<li>
								<i class="bi bi-arrow-right rounded-circle text-primary bg-primary-light p-2"></i>
								<span class="text-light">Free Shipping</span>
							</li>
							<li>
								<i class="bi bi-envelope-check rounded-circle text-primary bg-primary-light p-2"></i>
								<span class="text-light">Free Shipping</span>
							</li>
							<li>
								<i class="bi bi-envelope-check rounded-circle text-primary bg-primary-light p-2"></i>
								<span class="text-light">Free Shipping</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>



		<header id="masthead" class="site-header">
			<div class="container py-2">
				<div class="row align-items-center">
					<div class="col d-flex justify-content-center justify-content-md-start site-header__logo">
						<?php
							the_custom_logo();
							
						?>
					</div>
					<div class="col-md-5 my-3 my-md-0 site-header__search">
						<?php
						aws_get_search_form(true);
						?>
					</div>
					<div class="col site-header__cart d-flex justify-content-center justify-content-md-end">
						<a href="<?php echo wc_get_cart_url(); ?>">
							<i class="bi bi-bag p-2"></i>
						</a>
						<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'storeags'); ?>"><?php echo sprintf(_n('%d item', '%d items', WC()->cart->get_cart_contents_count()), WC()->cart->get_cart_contents_count()); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
					</div>
				</div>
			</div>


		</header>

		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="account-container">
						<?php 
							if ( is_user_logged_in() ) { 
						?>
								<a class="text-primary" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','storeags'); ?>" ><i class="bi bi-person"></i></a>
						<?php 
							} else { 
							?>
								<a class="text-primary" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','storeags'); ?>"><?php _e('Login / Register','storeags'); ?></a>
						<?php 
							} 
						?>
					</div>
				</div>
				<div class="col-6">
					This is for loggin proposes
					
				</div>
			</div>
		</div>


		<nav id="site-navigation" class="main-navigation bg-primary">
			<div class="container d-flex justify-content-center">

			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
					</button>
				</div>

				<div class="col-12 text-center">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu'
							)
						);
					?>
				</div>

			</div>
		

			</div>
			
		</nav>

		