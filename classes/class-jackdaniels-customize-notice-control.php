<?php
/**
 * Customize API: jackdaniels_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage jackdaniels
 * @since jackdaniels 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since jackdaniels 1.0
 *
 * @see WP_Customize_Control
 */
class jackdaniels_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since jackdaniels 1.0
	 *
	 * @var string
	 */
	public $type = 'jackdaniels-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since jackdaniels 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'jackdaniels' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/jackdaniels/#dark-mode-support', 'jackdaniels' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'jackdaniels' ); ?>
			</a></p>
		</div><!-- .notice -->
		<?php
	}
}
