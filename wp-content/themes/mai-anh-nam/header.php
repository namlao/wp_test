<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mai_anh_nam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'mai-anh-nam'); ?></a>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-7 col-lg-5">
                    <div class="logo">
                        <h1><a href="<?php echo home_url()?>">Start Boostrap</a></h1>
                    </div>
                </div>
                <div class="col-12 col-lg-5 order-2">

                    <nav id="site-navigation" class="main-navigation navbar-expand-lg navbar-light">
                        <button class="menu-toggle navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button
<!--                        <button class="" aria-controls="primary-menu"-->
<!--                                aria-expanded="false">--><?php //esc_html_e('Primary Menu', 'mai-anh-nam'); ?><!--</button>-->
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                                'menu_class' => 'menu nav-menu justify-content-space-between'
                            )
                        );
                        ?>

                    </nav><!-- #site-navigation -->

                </div>
                <div class="col-5 col-lg-2 text-align-end order-1">
                    <div class="sign-up">
                        <a href="" class="btn btn-primary btn-custom">Sign up</a>
                    </div>
                </div>
            </div>
        </div>



    </header><!-- #masthead -->
