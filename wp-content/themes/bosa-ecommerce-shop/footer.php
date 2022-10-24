<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bosa Ecommerce Shop 1.0.0
 */
?>
	<?php
		$footer_layout = '';
		if( get_theme_mod( 'footer_layout', 'footer_four' ) == 'footer_one'){
			$footer_layout = 'site-footer-primary';
		}elseif( get_theme_mod( 'footer_layout', 'footer_four' ) == 'footer_two'){
			$footer_layout = 'site-footer-two';
		}elseif( get_theme_mod( 'footer_layout', 'footer_four' ) == 'footer_three'){
			$footer_layout = 'site-footer-three';
		}elseif( get_theme_mod( 'footer_layout', 'footer_four' ) == 'footer_four'){
			$footer_layout = 'site-footer-four';
		}
		
		$has_footer_bg = '';
		$render_footer_image_size 	= get_theme_mod( 'render_footer_image_size', 'full' );
		$footer_image_id 			= get_theme_mod( 'footer_image', '' );
		$get_footer_image_array 	= wp_get_attachment_image_src( $footer_image_id, $render_footer_image_size );
		if( is_array( $get_footer_image_array ) ){
			$footer_image = $get_footer_image_array[0];
		}else{
			$footer_image = '';
		}
		if ( $footer_image || get_theme_mod( 'top_footer_background_color', '' ) ){
			$has_footer_bg = 'has-footer-bg';
		}
	?>

</div><!-- #page -->

<?php wp_footer(); ?>

<div id="back-to-top">
    <a href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
</div>
<!-- #back-to-top -->

</body>
</html>
