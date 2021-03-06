<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package ascent
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo of_get_option('favicon'); ?>"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/includes/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php do_action( 'before' ); ?>
<header id="masthead" class="site-header" role="banner">
    <div class="header-bottom">
        <div class="header-bottom-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 hidden-xs">
                        <div id="logo">
                            <div class="site-header-inner col-sm-12">
                                <div class="site-branding">
                                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				    <?php if(of_get_option('logo')): ?>
					<img src="<?php echo of_get_option('logo'); ?>" alt="<?php bloginfo( 'name' ); ?>">
				    <?php else: ?>
					<?php bloginfo( 'name' ); ?>
				    <?php endif; ?>
				    </a></h1>
				    <h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div><!--.col-sm-3-->
                    <div class="col-sm-9">
                        <div class="site-navigation pull-right">
			    <nav class="main-menu">
				<?php
				wp_nav_menu(array(
				    'theme_location' => 'main-menu',
				    'container' => false,
				    'menu_class' => 'header-nav clearfix text-uppercase'
				));
				?>
			    </nav>
			    <div class="text-center site-title-xs visible-xs"><?php bloginfo( 'name' ); ?></div>
			    <div id="responsive-menu-container"></div>
                        </div><!-- .site-navigation -->
                    </div><!--.col-sm-9-->
                </div><!--.row-->
            </div><!-- .container -->
        </div><!--.header-bottom-inner-->
    </div><!--.header-bottom-->
</header><!-- #masthead -->

<?php include_once 'header-banner.php' ?>

<div class="main-content">  
    <div class="container">
        <div id="content" class="main-content-inner">
