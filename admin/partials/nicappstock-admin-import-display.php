<?php 

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://efraim.cat
 * @since      1.0.0
 *
 * @package    Nicappcrono
 * @subpackage Nicappcrono/admin/partials
 */

?>
<div class="wrap">
	<div id="icon-themes" class="icon32"></div>
	<h2><?php esc_html_e( get_admin_page_title() .' '.$this->version ); ?></h2>
	<?php settings_errors(); ?>
	<h1>Upload File</h1>
    <!-- Form -->
	<form method='post' action='' name='myform' enctype='multipart/form-data'>
  		<table>
    		<tr>
      			<td><?php _e( 'Upload file', $this->plugin_name ); ?></td>
      			<td><input type='file' name='file'></td>
    		</tr>
    		<tr>
    	  		<td>&nbsp;</td>
      			<td><input type='submit' name='but_submit' "<?php _e( 'Submit', $this->plugin_name ); ?>"></td>
    		</tr>
  		</table>
	</form>
	<hr />
	<?php $this->UploadFile(); ?>
</div>
