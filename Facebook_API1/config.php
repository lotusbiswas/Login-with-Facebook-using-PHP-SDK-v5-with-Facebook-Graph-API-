<?php
	session_start();

	require_once "Facebook/autoload.php";

	$FB = new \Facebook\Facebook([
		'app_id' => '1024211144607996', // do enter your own app_id
		'app_secret' => '86830f6358d9c6c4aa5e1e4df99457c1', //do enter your own app_secret
		'default_graph_version' => 'v2.10' // it is by default
	]);

	$helper = $FB->getRedirectLoginHelper();
?>