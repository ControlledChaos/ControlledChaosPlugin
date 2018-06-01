<?php
/**
 * Site settings page output.
 *
 *
 * @package    controlled-chaos
 * @subpackage controlled-chaos
 * @since controlled-chaos 1.0.0
 */

namespace CCPlugin\Settings_Page_Site;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$active_tab = 'ccp-site-admin-menu';
if ( isset( $_GET[ 'tab' ] ) ) {
    $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'ccp-site-admin-menu';
} ?>

<div class="wrap">
	<?php echo sprintf( '<h1>%1s %2s</h1>', get_bloginfo( 'name' ), esc_html__( 'Settings', 'controlled-chaos' ) ); ?>
    <p class="description"><?php esc_html_e( 'Customize the way WordPress is used.', 'controlled-chaos' ); ?></p>
    <h2 class="nav-tab-wrapper">
		<a href="?page=controlled-chaos-settings&tab=ccp-site-dashboard" class="nav-tab <?php echo $active_tab == 'ccp-site-dashboard' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Dashboard', 'controlled-chaos' ); ?></a>
        <a href="?page=controlled-chaos-settings&tab=ccp-site-admin-menu" class="nav-tab <?php echo $active_tab == 'ccp-site-admin-menu' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Admin Menu', 'controlled-chaos' ); ?></a>
        <a href="?page=controlled-chaos-settings&tab=ccp-site-admin-pages" class="nav-tab <?php echo $active_tab == 'ccp-site-admin-pages' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Admin Pages', 'controlled-chaos' ); ?></a>
		<a href="?page=controlled-chaos-settings&tab=ccp-site-meta-seo" class="nav-tab <?php echo $active_tab == 'ccp-site-meta-seo' ? 'nav-tab-active' : ''; ?>"><?php esc_html_e( 'Meta/SEO', 'controlled-chaos' ); ?></a>
    </h2>
	<form method="post" action="options.php">
        <?php if ( $active_tab == 'ccp-site-dashboard' ) {
            settings_fields( 'ccp_dashboard' );
            do_settings_sections( 'ccp-site-dashboard' );
			$save = __( 'Save Dashboard', 'controlled-chaos' );
		} elseif ( $active_tab == 'ccp-site-admin-menu' ) {
            settings_fields( 'ccp-site-admin-menu' );
            do_settings_sections( 'ccp-site-admin-menu' );
            $save = __( 'Save Menu', 'controlled-chaos' );
        } elseif ( $active_tab == 'ccp-site-admin-pages' ) {
            settings_fields( 'ccp-site-admin-pages' );
            do_settings_sections( 'ccp-site-admin-pages' );
            $save = __( 'Save Pages', 'controlled-chaos' );
        } elseif ( $active_tab == 'ccp-site-meta-seo' ) {
            settings_fields( 'ccp-site-meta-seo' );
            do_settings_sections( 'ccp-site-meta-seo' );
            $save = __( 'Save Meta', 'controlled-chaos' );
        } ?>
        <p class="submit"><?php submit_button( $save, 'primary', '', false, [] ); ?></p>
    </form>
</div>