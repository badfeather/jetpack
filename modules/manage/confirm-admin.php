<?php

$activate_url = wp_nonce_url(
		Jetpack::admin_url(
			array(
				'page'   => 'jetpack',
				'action' => 'activate',
				'module' => 'manage',
			)
		),
		"jetpack_activate-manage"
	);

$section = isset( $_GET['section'] ) ? $_GET['section'] : null;
$normalized_site_url = Jetpack::build_raw_urls( get_home_url() );

switch( $section ) {
	case 'plugins':
		$description = __( 'Well that was easy. Back to WordPress.com', 'jetpack' );
		$icon = "";
		$link = 'https://wordpress.com/plugins/' . $normalized_site_url;
		$link_title = __( 'Back to Manage Plugins', 'jetpack' );
		break;

	case 'themes':
		$description = __( 'Well that was easy. Back to WordPress.com', 'jetpack' );
		$icon = "";
		$link = 'https://wordpress.com/plugins/' . $normalized_site_url;
		$link_title = 'Back to Manage Themes';
		break;

	case 'security-settings':
		$description = __( 'Well that was easy. Back to WordPress.com', 'jetpack' );
		$icon = "";
		$link = 'http://wordpress.com/plugins/' . $normalized_site_url;
		$link_title = __('Back to Manage Securty Settings', 'jetpack' );
		break;

	case 'menus':
		$description = __( 'Well that was easy. Back to WordPress.com', 'jetpack' );
		$icon = "";
		$link = 'https://wordpress.com/menus/' . $normalized_site_url;
		$link_title = __( 'Back to Manage Menues', 'jetpack' );
		break;
	break;
	default:
		$description = "Well that was easy back to WordPress.com";
		$icon = "";
		$link = 'https://wordpress.com/stats/' . $normalized_site_url;
		$link_title = __( 'Back to Manage Site', 'jetpack' );
		break;
	break;
}
?>
<div class="page-content landing">
	<div class="" style="width:150px; height: 150px; border-radius: 75px; margin: 20px auto; background:#A9C4D9;">
		<?php echo $icon; ?>
	</div>
	<h1><span style="font-size: 38px; color: #81A944;" class="genericon genericon-checkmark"></span><?php echo esc_html( __( 'Enable Manage Enabled!', 'jetpack' ) ); ?></h1>
	<p style="max-width: 600px; text-align:center; font-size: 22px; color:#999; margin: 20px auto;">
		<?php echo esc_html( $description ); ?>
	</p>
	<p style="text-align: center;">	<?php printf( '<a style="font-size:16px; padding: 0 20px; height:40px; line-height:40px;"  href="%s">
			<span style="font-size:28px; vertical-align: middle; margin-top: -6px;" class="genericon genericon-previous"></span>%s</a>' , $link,
			esc_html( $link_title ) ); ?>
	</p>
</div>
<style >
	#jp-settings-screen h3{ display: none; }
</style>
