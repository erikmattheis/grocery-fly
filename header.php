<!doctype html>
<html <?php language_attributes(); ?> class="no-js" data-ng-app="storeApp">
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
    <script>
    function globalConfigCallback(o) {
    	window.globalConfig = {data: o};
    }
    </script>
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

<header>
	<nav class="navbar navbar-default">
		<div class="container-fluid">

		<?php get_sidebar('widget-area-1'); ?>    
		<!--
			<ul>
				<li><a class="navbar-brand" href="#">Weekly Ad</a></li>
				<li><a class="navbar-brand" href="#">Store Locator</a></li>
			</ul>
		-->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#AccountNav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		<!--
			<div class="collapse navbar-collapse" id="AccountNav">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="#">Sign In</a></li>
					<li><a href="">Sign Up</a></li>
				</ul>
			</div>
		-->
		</div>
	</nav>
	<div class="branding">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<img class="logo" src="images/logo1.png" />
				</div>
				<div class="col-md-8">
					<div class="btn-group pull-right">
						<button type="button" class="btn btn-default dropdown-toggle btn-shopping-list" data-toggle="dropdown" aria-expanded="false">
							My List 
							<span class="badge badgeCount ng-binding">0</span>
    						<span class="glyphicon glyphicon-chevron-down downArrow"></span>
    						<span class="sr-only">Toggle Dropdown</span>
						</button>
						<div class="dropdown-menu dropdown-menu-list" role="menu">
							<h3>My Shopping List</h3>
							<div class="row">
								<div class="col-md-6">
									<ul class="my-list">
										<li><i class="fa fa-print fa-2x" title="print"></i><span>print</span></li>
										<li><i class="fa fa-envelope fa-2x" title="print"></i><span>email</span></li>
										<li><i class="fa fa-folder-open fa-2x" title="print"></i><span>previous</span></li>
										<li><i class="fa fa-file fa-2x" title="print"></i><span>save</span></li>
										<li><i class="fa fa-list fa-2x" title="print"></i><span>manage</span></li>
									</ul>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Add your own" aria-describedby="basic-addon2">
										<span class="input-group-addon glyphicon glyphicon-plus" id="basic-addon2"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default navbar-main">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#SiteNav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="SiteNav">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Store Locator</a></li>
					<li><a href="#">Weekly Ad</a></li>
					<li><a href="#">Coupons</a></li>
					<li><a href="#">Recipes</a></li>
					<li><a href="#">Departments</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Employment</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
