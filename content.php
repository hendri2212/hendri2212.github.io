<?php
	$module = isset($_GET['module']) ? $_GET['module']: null;
	if ($module =='') {
		include "module/home/home.php";
	}elseif ($module == 'beranda') {
		include "module/home/home.php";
	}elseif ($module == 'syarat') {
		include "module/syarat/syarat.php";
	}else{
		"<p><b><h1>ERROR 404 PAGE NOT FOUND</h1></b></p>";
	}
?>
