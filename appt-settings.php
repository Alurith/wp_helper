<?php
/**
 * Used to set up additional settings to wordpress
 *
 * @package Apptec
 */

define('WP_MEMORY_LIMIT', '64M');

if (!WP_DEBUG) {
	define('WP_POST_REVISIONS', 5);
	define('WP_ALLOW_REPAIR', true);
} else {
	define( 'WP_DEBUG_LOG', true );
	
}