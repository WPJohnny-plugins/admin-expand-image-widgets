<?php
/**
 * Plugin Name: Admin Expand Image Widgets
 * Description: Auto-expand image widgets on Dashboard Widgets page, making images visible.
 * Author: WPJohnny
 * Author URI: https://wpjohnny.com/
 * Version: 0.1.3
 * Text Domain: admin-expand-image-widgets
 * Domain Path: /languages/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'admin_footer-widgets.php', 'aeiw_print_script' );
/**
 * Print the script to expand the widgets.
 *
 * @since 0.1.0
 * @return void
 */
function aeiw_print_script() {
	?>

	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.widget-liquid-right div[id*="media_image"]').each(function(){
				jQuery(this).find('.widget-title-action').trigger('click');
			});
		});
	</script>

	<?php
}
