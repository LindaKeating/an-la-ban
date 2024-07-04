<?php
/**
 * Podcast episodes options page template
 *
 * @package Podcast Player
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="updated notice is-dismissible pp-welcome-notice">
	<p class="intro-msg">
		<?php esc_html_e( 'Thanks for trying/updating Podcast Player.', 'podcast-player' ); ?>
	</p>
	<p><strong style="color: red;"><?php esc_html_e( 'Important: ', 'podcast-player' ); ?></strong><?php esc_html_e( 'If you are using a caching plugin, please clear (purge) the cache to update plugin CSS and JS files.', 'podcast-player' ); ?></p>
	<h4 style="margin-bottom: 0.25em;padding: 5px;">
		<?php esc_html_e( 'What\'s New in Pro version?.', 'podcast-player' ); ?>
	</h4>
	<ol>
	<li class="premium">
		<?php esc_html_e( 'In pro statistics, bring more accuracy to calculate average episode duration and average release cycle by removing outlier data.', 'podcast-player' ); ?>
	</li>
	<li class="premium">
		<?php esc_html_e( 'Check how PP Pro statistics feature work on ', 'podcast-player' ); ?>
		<a href="https://www.youtube.com/watch?v=gAVRozP8uqs" target="_blank">https://www.youtube.com/watch?v=gAVRozP8uqs</a>
	</li>
	</ol>
	<div class="common-links">
		<p class="pp-link">
			<a href="https://wordpress.org/support/plugin/podcast-player/" target="_blank">
				<?php esc_html_e( 'Raise a support request', 'podcast-player' ); ?>
			</a>
		</p>
		<p class="pp-link">
			<a href="https://wordpress.org/support/plugin/podcast-player/reviews/" target="_blank">
				<?php esc_html_e( 'Give us 5 stars rating', 'podcast-player' ); ?>
			</a>
		</p>
		<p class="pp-link">
			<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'pp-dismiss', 'dismiss_admin_notices' ), 'pp-dismiss-' . get_current_user_id() ) ); ?>" target="_parent" style="color: red;">
				<?php esc_html_e( 'Dismiss this notice', 'podcast-player' ); ?>
			</a>
		</p>
	</div>
</div>
