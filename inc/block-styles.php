<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage jackdaniels
 * @since jackdaniels 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since jackdaniels 1.0
	 *
	 * @return void
	 */
	function jackdaniels_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'jackdaniels-columns-overlap',
				'label' => esc_html__( 'Overlap', 'jackdaniels' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'jackdaniels-border',
				'label' => esc_html__( 'Borders', 'jackdaniels' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'jackdaniels-border',
				'label' => esc_html__( 'Borders', 'jackdaniels' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'jackdaniels-border',
				'label' => esc_html__( 'Borders', 'jackdaniels' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'jackdaniels-image-frame',
				'label' => esc_html__( 'Frame', 'jackdaniels' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'jackdaniels-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'jackdaniels' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'jackdaniels-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'jackdaniels' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'jackdaniels-border',
				'label' => esc_html__( 'Borders', 'jackdaniels' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'jackdaniels-separator-thick',
				'label' => esc_html__( 'Thick', 'jackdaniels' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'jackdaniels-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'jackdaniels' ),
			)
		);
	}
	add_action( 'init', 'jackdaniels_register_block_styles' );
}
