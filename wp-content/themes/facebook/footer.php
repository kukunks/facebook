<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package myshare_pro
 */

?>

	</div><!-- #content .site-content -->
	
	<footer id="colophon" class="site-footer">

		<?php if ( ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) && get_theme_mod('footer-widgets-on', true) ) { ?>

			<div class="footer-columns container clear">

				<div class="footer-column footer-column-1">
					<?php dynamic_sidebar( 'footer-1' ); ?>
				</div>

				<div class="footer-column footer-column-2">
					<?php dynamic_sidebar( 'footer-2' ); ?>
				</div>

				<div class="footer-column footer-column-3">
					<?php dynamic_sidebar( 'footer-3' ); ?>
				</div>

				<div class="footer-column footer-column-4">
					<?php dynamic_sidebar( 'footer-4' ); ?>
				</div>												

			</div><!-- .footer-columns -->

		<?php } ?>

		<div class="clear"></div>

		<div id="site-bottom" class="clear">

		<div class="container">

			<?php if ( get_theme_mod('footer-social-on', 'true') == true ) : ?>

			<div class="footer-social">

				<?php if ( get_theme_mod('twitter-url', '') ) : ?>
					<a class="twitter" href="<?php echo esc_url( get_theme_mod('twitter-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-twitter-white.png'; ?>" alt="Twitter"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('facebook-url', '') ) : ?>
					<a class="facebook" href="<?php echo esc_url( get_theme_mod('facebook-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-facebook-white.png'; ?>" alt="Facebook"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('google-plus-url', '') ) : ?>
					<a class="google-plus" href="<?php echo esc_url( get_theme_mod('google-plus-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-google-plus-white.png'; ?>" alt="Google+"></a>
				<?php endif; ?>
				
				<?php if ( get_theme_mod('youtube-url', '') ) : ?>
					<a class="youtube" href="<?php echo esc_url( get_theme_mod('youtube-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-youtube-white.png'; ?>" alt="YouTube"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('linkedin-url', '') ) : ?>
					<a class="linkedin" href="<?php echo esc_url( get_theme_mod('linkedin-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-linkedin-white.png'; ?>" alt="LinkedIn"></a>
				<?php endif; ?>

				<?php if ( get_theme_mod('pinterest-url', '') ) : ?>
					<a class="pinterest" href="<?php echo esc_url( get_theme_mod('pinterest-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-pinterest-white.png'; ?>" alt="Pinterest"></a>
				<?php endif; ?>
				
				<?php if ( get_theme_mod('rss-url', '') ) : ?>
					<a class="rss" href="<?php echo esc_url( get_theme_mod('rss-url', '') ); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/icon-rss-white.png'; ?>" alt="RSS"></a>
				<?php endif; ?>					

			</div><!-- .footer-social -->

			<?php endif; ?>		

			<?php 
				if ( has_nav_menu( 'footer' ) ) {
					wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-nav' ) );
				}
			?>	

			<div class="site-info">

				<?php if(get_theme_mod('footer-credit')) { 
					
					echo get_theme_mod('footer-credit');
					
					} else { 
						$theme_uri = 'https://www.happythemes.com/wordpress-themes/';
						$author_uri = 'https://www.happythemes.com/';
				?>

				&copy; <?php echo date("o"); ?> <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo('name'); ?></a> - <?php echo __('Theme by', 'myshare-pro'); ?> <a href="https://cnttvn.net">Hải Ngốc - CNTTVN.NET</a>

				<?php } ?>

			</div><!-- .site-info -->

		</div>
		
		</div><!-- #site-bottom -->

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php if ( get_theme_mod('back-top-on', true) ) : ?>

	<div id="back-top">
		<a href="#top" title="<?php echo __('Back to top', 'myshare-pro'); ?>"><span class="genericon genericon-collapse"></span></a>
	</div>

<?php endif; ?>


<?php if ( get_theme_mod('sticky-nav-on', true) == true ) : ?>

<script type="text/javascript">

(function($){ //create closure so we can safely use $ as alias for jQuery

    $(document).ready(function(){

        "use strict"; 

        $("#primary-bar").sticky( { topSpacing: 0 } );
    });

})(jQuery);

</script>

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
