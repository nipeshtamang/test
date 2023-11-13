<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package drishyam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="home">
        <div class="main-menu">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light">
                <div class="container">
                    <div class="logo"><?php the_custom_logo(); ?></div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">&nbsp;</span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <?php
					wp_nav_menu(
					  array(
						'theme_location' => 'menu-1',
						'container' => 'ul',
						'depth' => 2,
						'menu_class' => 'navbar-nav ml-auto',
						'walker' => new WP_Bootstrap_Navwalker()
					  )
					);
					?>

                    </div>
                </div>
            </nav>
        </div>
    </header>