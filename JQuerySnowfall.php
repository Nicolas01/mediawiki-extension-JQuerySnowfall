<?php

if ( function_exists( 'wfLoadExtension' ) ) {
    wfLoadExtension( 'JQuerySnowfall' );
    // Keep i18n globals so mergeMessageFileList.php doesn't break
    $wgMessagesDirs['JQuerySnowfall'] = __DIR__ . '/i18n';
    return true;
} else {
    die( 'This version of the JQuerySnowfall extension requires MediaWiki 1.25+' );
}
