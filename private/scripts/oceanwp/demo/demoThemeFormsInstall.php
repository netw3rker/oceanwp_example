<?php
require_once( OE_PATH .'/includes/panel/classes/importers/class-helpers.php' );
require_once( OE_PATH .'/includes/panel/classes/class-install-demos.php' );

$_POST['owp_import_demo'] = 'maria';
echo("defined the post value\r\n");
$nonce=wp_create_nonce( 'owp_import_demo_data_nonce' );
echo("generated the nonce\r\n");
$_POST['owp_import_demo_data_nonce']=$nonce;

echo("importing the theme forms");
OceanWP_Demos::ajax_import_forms();



