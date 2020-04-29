<?php
	// 实现微信分享功能
	// 通过script标签引入该文件，通过url参数传递原网页的完整url
	error_reporting(0);
	$queryString = $_SERVER["QUERY_STRING"];// 获取PHP后的网址参数，格式为：originUrl=...
	$url = substr($queryString,10);	// 截取原网页的完整url
	
	require_once "jssdk.php";
	$jssdk = new JSSDK("wx20d8d131ad23fc22", "f2dd223c6710ae6f66a62bb20db76b6d", $url);// 改为自己公众号的AppID、AppSecret
	$signPackage = $jssdk->GetSignPackage();
	echo "var signPackage=";
 	die(json_encode($signPackage));// 返回微信分享所需参数
 ?>