<?php
/**
 * About page introduction output.
 *
 *
 * @package    controlled-chaos
 * @subpackage controlled-chaos
 * @since controlled-chaos 1.0.0
 */

namespace CC_Plugin\Plugin_Page_About;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Plugin Overview', 'controlled-chaos-plugin' ); ?></h3>
<p><?php _e( 'This plugin is a head start for building a plugin specific to your website. However, it can be used as is without further development.', 'controlled-chaos-plugin' ); ?></p>
<h3><?php _e( 'Dependencies', 'controlled-chaos-plugin' ); ?></h3>
<p><?php _e( 'Short array syntax requires PHP 5.4+', 'controlled-chaos-plugin' ); ?></p>
<p><?php _e( 'To take advantage of all of its features, this plugin is recommended for use with Advanced Custom Fields PRO.', 'controlled-chaos-plugin' ); ?></p>
<h3><?php _e( 'Starter Settings Pages', 'controlled-chaos-plugin' ); ?></h3>
<p><?php _e( 'One settings page via the default WordPress method and one settings page using the Advanced Custom Fields Options Page method (if ACF is active).', 'controlled-chaos-plugin' ); ?></p>
<h3><?php _e( 'Sample Custom Post Type', 'controlled-chaos-plugin' ); ?></h3>
<p><?php _e( 'Rename and duplicate as needed.', 'controlled-chaos-plugin' ); ?></p>
<h3><?php _e( 'Sample Editor (Gutenberg) Block', 'controlled-chaos-plugin' ); ?></h3>
<p><?php _e( 'Supplied as reference. More to come.', 'controlled-chaos-plugin' ); ?></p>
<h3><?php _e( 'Renaming the plugin for your website', 'controlled-chaos-plugin' ); ?></h3>
<p><?php _e( 'To rename this plugin to convert it specifically for a single website, first rename this file and rename the plugin folder with the same name as this file. Then use a find &amp; replace function to look for the following...', 'controlled-chaos-plugin' ); ?></p>
<ol>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Text Domain', 'controlled-chaos-plugin' ), esc_html__( 'The text domain should be the same as this file and the plugin folder. Replace "controlled-chaos-plugin".', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Classes', 'controlled-chaos-plugin' ), esc_html__( 'Classes are prefixed with the plugin name. Replace "Controlled_Chaos".', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Class Variables', 'controlled-chaos-plugin' ), esc_html__( 'Class variables are prefixed with the plugin name. Replace "controlled_chaos".', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Functions', 'controlled-chaos-plugin' ), esc_html__( 'There are a few functions prefixed with the plugin name. The above replace of "controlled_chaos" will have given them your new name.', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Filters', 'controlled-chaos-plugin' ), esc_html__( 'Filters are prexixed with an abbreviation for the plugin name. Replace "ccp".', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Pages', 'controlled-chaos-plugin' ), esc_html__( 'Admin page URLs are prexixed with an abbreviation for the plugin name. The above replace of "ccp" will have given them your new prefix.', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Options', 'controlled-chaos-plugin' ), esc_html__( 'Options are prexixed with an abbreviation for the plugin name. The above replace of "ccp" will have given them your new prefix.', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Version', 'controlled-chaos-plugin' ), esc_html__( 'The plugin version is all caps and is prexixed with an abbreviation for the plugin name. Replace "CCP".', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Author', 'controlled-chaos-plugin' ), esc_html__( 'The author name and email is used in class docblocks. Replace "Greg Sweet" and replace "greg@ccdzine.com".', 'controlled-chaos-plugin' ) ); ?>
<?php echo sprintf( '<li><strong>%1s:</strong> %2s</li>', esc_html__( 'Plugin Name', 'controlled-chaos-plugin' ), esc_html__( 'The plugin name is used in various places. Replace "Controlled Chaos".', 'controlled-chaos-plugin' ) ); ?>
</ol>