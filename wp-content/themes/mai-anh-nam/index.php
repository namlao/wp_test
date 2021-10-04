<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mai_anh_nam
 */

get_header();
?>

	<main id="primary" class="site-main">
        <section id="banner">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6 text-align-center">
                        <div class="content-banner">
                            <h1>Generate more leads with a professional landing page!</h1>
                            <?php echo do_shortcode('[gravityform id="3" title="true" description="true"]')?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-2">
            <div class="container">
                <div class="row">
                    <div class="col-4 text-align-center">
                        <i class="bi bi-window text-primary ico-custom"></i>
                        <h3>Fully Responsive</h3>
                        <p>This theme will look great on any device, no matter the size!</p>
                    </div>
                    <div class="col-4 text-align-center">
                        <i class="bi bi-layers text-primary ico-custom"></i>
                        <h3>Bootstrap 5 Ready</h3>
                        <p>Featuring the latest build of the new Bootstrap 5 framework!</p>
                    </div>
                    <div class="col-4 text-align-center">
                        <i class="bi bi-terminal text-primary ico-custom"></i>
                        <h3>Easy to Use</h3>
                        <p>Ready to use with your own content, or customize the source files!</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="section-3">

        </section>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
