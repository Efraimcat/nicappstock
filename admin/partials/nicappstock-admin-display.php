<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://efraim.cat
 * @since      1.0.0
 *
 * @package    Nicappstock
 * @subpackage Nicappstock/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
	<h2><?php esc_html_e( get_admin_page_title() .' '.$this->version); ?></h2>
	<!--NEED THE settings_errors below so that the errors/success messages are shown after submission - wasn't working once we started using add_menu_page and stopped using add_options_page so needed this-->
	<?php settings_errors(); ?>
	<h3><?php _e( 'Nic-app Stock Settings', $this->plugin_name )?></h3>
	<img
		src="<?php esc_html_e( plugin_dir_url( __DIR__ ) . 'img/' ); ?>NIC-APP-03-350x233.png"
		alt="nic-app" width="350" height="233">
	<hr />
	<div id="nicappstock-intro">
		<p><?php _e( 'Nic-app Stock.', $this->plugin_name ); ?></p>
		<p>
			<?php _e( 'Configuration is an important part of proper operation and must be given the necessary attention. You can find all the necessary help in', $this->plugin_name ); ?>
			<a
				href="<?php esc_html_e( admin_url( 'admin.php?page=nicappstock-support', 'https' ) ); ?>"> <?php _e( 'the support tab', $this->plugin_name ); ?></a> <?php _e( 'or in', $this->plugin_name ); ?>
			<a href="https://nic-app.com/nic-app-stock/" target="_blank"><?php _e( 'Nic-app Stock web page', $this->plugin_name )?></a>.
		</p>
	</div>
	<hr />
	<p>
		<a href="https://nic-app.com/nic-app-stock/" target="_blank"><?php _e( 'Contact us', $this->plugin_name )?></a> <?php _e( 'with any questions.', $this->plugin_name ); ?></p>
</div>