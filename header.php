<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri() . '/favicon.ico'; ?>" type="image/x-icon" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div class="row">
			<div class="site-header-inner col-sm-12">

                <div class="site-branding">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo get_stylesheet_directory_uri() . '/images/logo.png'; ?>" alt="Adam Roche"/>
                            <span class="sr-only">Adam Roche</span>
                        </a>
                    </h1>
                </div>

                <nav class="nav">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'container_class' => '',
                            'menu_class' => 'nav navbar-nav',
                            'fallback_cb' => '',
                            'menu_id' => 'main-menu',
                            'walker' => new wp_bootstrap_navwalker()
                        )
                    ); ?>
                </nav>

			</div>
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->


<div class="main-content">
	<div class="container">
		<div class="row">
			<div id="content" class="main-content-inner col-sm-12 col-md-12">

