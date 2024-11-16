<?php

/**
 * Fires after WordPress has finished loading but before any headers are sent.
 */
add_action(
	'init', 
	function (): void {

		$theme          = 'twentytwentyfour';
		$block_patterns = array(
			'hidden-404',
		);

		// Override parent-theme patterns.
		foreach ( $block_patterns as $block_pattern ) {
			$pattern_file = get_stylesheet_directory() . '/patterns/' . $block_pattern . '.php';

			register_block_pattern(
				$theme . '/' . $block_pattern,
				require $pattern_file  // phpcs:ignore WordPressVIPMinimum.Files.IncludingFile.UsingVariable
			);
		}
	} 
);
