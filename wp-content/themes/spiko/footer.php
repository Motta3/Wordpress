<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spiko
 */
if ( ! function_exists( 'spiko_plus_activate' ) ):
	do_action('spiko_footer_section_hook');
else:
	do_action('spiko_plus_footer_section_hook');
endif;?>
</div>
</div>
<?php wp_footer(); ?>	
</body>
</html>