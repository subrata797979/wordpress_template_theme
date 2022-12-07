<?php
/**
 * Show the appropriate content for the Link post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage jackdaniels
 * @since jackdaniels 1.0
 */

// Print the 1st instance of a paragraph block. If none is found, print the content.
if ( has_block( 'core/paragraph', get_the_content() ) ) {

	jackdaniels_print_first_instance_of_block( 'core/paragraph', get_the_content() );
} else {

	the_content();
}
