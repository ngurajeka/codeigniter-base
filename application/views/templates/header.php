<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width initial-scale=1">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="/assets/css/normalize.css">	
	<link rel="stylesheet" href="/assets/css/foundation.min.css">	
	<link rel="stylesheet" href="/assets/css/main.css">
	<script src="/assets/js/vendor/modernizr.js"></script>
</head>
<body>

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">

			<!-- Off Canvas Menu -->
			<aside class="left-off-canvas-menu">
				<ul class="off-canvas-list">
					<li><label class="first">Menu 1</label></li>
					<li><a href="#" title="">Menu 2</a></li>
				</ul>
				<ul class="off-canvas-list">
					<li><label class="first">Menu 3</label></li>
					<li><a href="#" title="">Menu 4</a></li>
				</ul>
			</aside>
			<!-- navbar -->
			<nav class="tab-bar show-for-small">
				<a class="left-off-canvas-toggle menu-icon">
					<span>SiteName</span>
				</a>
			</nav>
			<nav class="top-bar docs-bar hide-for-small" data-topbar>
				<ul class="title-area">
					<li class="name">
						<h1><a href="/">Site Name</a></h1>
					</li>
				</ul>
				<section class="top-bar-section">
					<ul class="right">
						<li class="divider"></li>
						<li class="has-dropdown">
							<a href="#" class="">Learn</a>
							<ul class="dropdown">
								<li><a href="http://foundation.zurb.com/learn/features.html">Features</a></li>
								<li><a href="http://foundation.zurb.com/learn/features.html">Features</a></li>
							</ul>
						</li>
						<li class="divider"></li>
						<li class="has-dropdown">
							<a href="http://foundation.zurb.com/templates.html" class="">Develop</a>
							<ul class="dropdown">
								<li><a href="http://foundation.zurb.com/templates.html">Add-ons</a></li>
							</ul>
						</li>
					</ul>
				</section>
			</nav>
			<!-- end of navbar -->
			<header>
				<div class="row">
					<div class="large-12 columns">
						<h1>Site Name</h1>
						<h4>Site Description.</h4>
					</div>
				</div>
			</header>