<?php
/**
 * Extension MobileApp
 *
 * @file
 * @ingroup Extensions
 * @author Yuvi Panda
 * @copyright © 2014 Yuvi Panda
 * @license GPL-2.0-or-later
 */

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'MobileApp' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['MobileApp'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for MobileApp extension. Please use wfLoadExtension instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
} else {
	die( 'This version of the MobileApp extension requires MediaWiki 1.25+' );
}
