<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '887540808090593',
		'app_secret' => '49ad9088a4086c05fbdd6d3712ace259',
		'default_graph_version' => 'v2.11'
	]);

	$helper = $FB->getRedirectLoginHelper();
?>
