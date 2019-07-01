<?php
/////////////////////////////////////////////////////////////////////////
/* -------- WPMU DEV Dashboard Notice - Aaron Edwards (Incsub) ------- */
/* This provides notices of available updates for our premium products */
if ( ! class_exists( 'WPMUDEV_Dashboard_Notice4' ) ) {
	class WPMUDEV_Dashboard_Notice4 {
		var $version = '4.2';
		var $screen_id = false;
		var $product_name = false;
		var $product_update = false;
		var $theme_pack = 128;
		var $server_url = 'https://premium.wpmudev.org/api/dashboard/v1/';
		var $update_count = 0;
		function __construct() {
		}
		function remove_older() {
		}
		function deregister_hook( $hook_name, $class_name, $method_name, $priority ) {
			return false;
		}
		function init() {
		}
		function is_allowed_screen() {
			return false;
		}
		function auto_install_url() {
			return '';
		}
		function activate_url() {
			return '';
		}
		function install_notice() {
			return;
		}
		function activate_notice() {
			return;
		}
		function notice_styles() {
		}
		function notice_scripts() {
		}
		function get_id_plugin( $plugin_file ) {
		}
		function updates_check() {
		}
		function filter_plugin_info( $res, $action, $args ) {
		}
		function filter_plugin_rows() {
		}
		function filter_plugin_count( $value ) {
      return $value;
		}
		function filter_theme_count( $value ) {
			return $value;
		}
		function plugin_row( $file, $plugin_data ) {
		}
		function themepack_row( $file, $plugin_data ) {
		}
		function disable_checkboxes() {
		}
		function set_activate_flag( $plugin ) {
		}
		function popup_changelog( $project_id ) {
		}
		function popup_changelog_ajax() {
		}
		function dismiss_ajax() {
		}
	}
	$GLOBALS['WPMUDEV_Dashboard_Notice4'] = new WPMUDEV_Dashboard_Notice4();
}
//disable older versions
if ( ! class_exists( 'WPMUDEV_Dashboard_Notice' ) ) {
	class WPMUDEV_Dashboard_Notice {
	}
}
if ( ! class_exists( 'WPMUDEV_Dashboard_Notice3' ) ) {
	class WPMUDEV_Dashboard_Notice3 {
	}
}

if ( ! class_exists( 'WPMUDEV_Dashboard_Notice3' ) ) {
	class WPMUDEV_Dashboard_Notice3 {
	}
}
