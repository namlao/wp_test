<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mai_anh_nam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!--	--><?php //mai_anh_nam_post_thumbnail(); ?>

    <div class="entry-content">
        <div class="container">

            <?php the_content();
            $data = [
                'name' => get_field('name'),
                'address' => get_field('address'),
                'phone' => get_field('phone'),
                'sothich' => get_field('sở_thich')
            ];

            if (get_field('name')):
                ?>

                <p>Họ và tên: <?php echo $data['name'] ?></p>
                <p>Địa chỉ: <?php echo $data['address'] ?></p>
                <p>Phone: <?php echo $data['phone'] ?></p>
                <p>Sở thích: <?php echo $data['sothich'] ?></p>
            <?php endif; ?>
        </div>
        <?php


        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'mai-anh-nam'),
                'after' => '</div>',
            )
        );
        ?>
    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
