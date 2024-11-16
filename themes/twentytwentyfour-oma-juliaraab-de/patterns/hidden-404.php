<?php
/**
 * 404 content.
 * 
 * @package figuren-theater/ft-network-block-patterns
 */

return array(
	'title'    => '404',
	'inserter' => false,
	'content'  => '<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading" id="page-not-found">' . esc_html_x( 'Page Not Found', 'Heading for a webpage that is not found', 'twentytwentyfour' ) . '</h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Die gesuchte Seite existiert nicht oder sie wurde verschoben.' . 
/*esc_html_x( 'The page you are looking for does not exist, or it has been moved. Please try searching using the form below.', 'Message to convey that a webpage could not be found', 'twentytwentyfour' )*/
'</p>
<!-- /wp:paragraph -->',
);
