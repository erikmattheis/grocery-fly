<!doctype html>
<html <?php language_attributes(); ?> class="no-js" data-ng-app="storeApp">
	<head>
    <meta charset="UTF-8">
	<link href="//www.google-analytics.com" rel="dns-prefetch">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
    <script>
    function globalConfigCallback(o) {
    	window.globalConfig = {data: o};
    }
    </script>
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<?php get_sidebar('widget-area-1'); ?>

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>"><h1 style="color:red"><?php bloginfo('name'); ?></h1></a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php gsn_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
