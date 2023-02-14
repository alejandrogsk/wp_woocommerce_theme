<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package storeags
 */

?>

	<footer id="colophon" class="site-footer">

		<div class="bg-primary text-white py-5">
			<div class="container">
				<div class="row">
					
					<div class="col-12 col-sm-6 col-md-4">
						<?php
							dynamic_sidebar( 'footer_widget-col-one' );
						?>
					</div>
					
					<div class="col-12 col-sm-6 col-md-4">
						<?php
							dynamic_sidebar( 'footer_widget-col-two' );
						?>
					</div>

					<div class="col-12 col-md-6 col-lg-4 ms-auto">
						<?php
							dynamic_sidebar( 'footer_widget-col-three' );
						?>
					</div>
				
				</div>
			</div>

		</div>

		<div class="container py-2">
			<div class="row">
				<div class="col-6"><p class="text-primary"><?php echo bloginfo( 'name' ); ?></p></div>
				<div class="col-6 d-flex justify-content-end">Links a redes sociales</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
