<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
	<?php wp_head(); ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/shadowbox.css">
	<meta name='viewport' content='width=device-width, initial-scale=0.8, maximum-scale=0.8, user-scalable=no' />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/shadowbox.js"></script>
	<script type="text/javascript">
		Shadowbox.init();
	</script>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<div class="brand-wrap">
				<section id="branding">
					<div id="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
							<div><img class="header-logo" src="/wp-content/uploads/2014/11/logo-diamond.png"></div>
							<div><img class="header-business-name" src="/wp-content/uploads/2014/11/logo1.png"></div>
						</a>
						<div class="header-contact">
							<p>707.217.1091<p>
							<p>
								<a href="mailto:rvalenciatile@gmail.com" onclick="__gaTracker('send', 'event', 'inpage-link', 'click', 'contact-us');">
									rvalenciatile@gmail.com
								</a>
							</p>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div id="site-description"><?php bloginfo( 'description' ); ?></div>
				</section>
			</div>
			<nav id="menu" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
			</nav>
		</header>
		<div class="container-wrap cf">
			<div id="container">