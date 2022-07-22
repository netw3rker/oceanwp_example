<?php
require_once( OE_PATH .'/includes/panel/classes/importers/class-helpers.php' );
require_once( OE_PATH .'/includes/panel/classes/class-install-demos.php' );

$_POST['owp_import_demo'] = 'maria';
echo("defined the post value\r\n");
$nonce=wp_create_nonce( 'owp_import_demo_data_nonce' );
echo("generated the nonce\r\n");
$_POST['owp_import_demo_data_nonce']=$nonce;

echo("Executing post import cleanup\r\n");
$_POST['owp_import_is_xml'] = true;
$_POST['owp_import_demo_type'] = 'elementor';

OceanWP_Demos::ajax_after_import();



