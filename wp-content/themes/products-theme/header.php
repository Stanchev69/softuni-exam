<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Shop</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">

	<link rel="stylesheet" href="./css/master.css">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    	
<?php wp_nav_menu( array( 'theme_location'=>'my-custom-menu', 'container_class'=>'custom-menu-class' ) ); ?>
	<div class="site-wrapper">
		<header class="site-header">
			<h1 class="site-title"><a href="#">Online Shop</a></h1>
		</header>
<?php do_action('wp_head');