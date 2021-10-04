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
                <div class="col-5">
                    <div class="logo">
                        <h1><a href="<?php echo home_url()?>">Start Boostrap</a></h1>
                    </div>
                </div>
                <div class="col-5">

                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu"
                                aria-expanded="false"><?php esc_html_e('Primary Menu', 'mai-anh-nam'); ?></button>
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
                <div class="col-2 text-align-end">
                    <div class="sign-up">
                        <a href="" class="btn btn-primary btn-custom">Sign up</a>
                    </div>
                </div>
            </div>
        </div>



    </header><!-- #masthead -->
