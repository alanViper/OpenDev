<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title><?php wp_title("",true);?></title>
	<meta charset="utf-8" />

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link href="http://fonts.googleapis.com/css?family=Merienda" rel="stylesheet" type="text/css">

	<?php wp_head();?>
</head>
<body>

<header class="wrapper">
	<div id="logo">
		<a href="<?php echo get_settings('home'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="OpenDev" title="OpenDev" /></a>
	</div>
	<div id="like">
		<a href="https://www.facebook.com/groups/opendev/" target="_blank" alt="OpenDev - Grupo no facebook" title="OpenDev - Grupo no facebook"><img src="<?php bloginfo('template_directory'); ?>/images/like.png" alt="OpenDev - Grupo no facebook" title="OpenDev - Grupo no facebook" /></a>
	</div>

	<nav>
		<ul id="nav_header">
			<li><a href="<?php echo get_settings('home'); ?>">Home</a></li>
			<li>|</li>
			<li><a href="http://opendev.com.br/blog">Blog</a></li>
			<li>|</li>
			<li><a href="http://opendev.com.br/contato">Contato</a></li>
		</ul>
	</nav>		
</header>
