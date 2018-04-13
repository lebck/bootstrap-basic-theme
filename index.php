<?php get_header(); ?>

<body class="<?php echo 'site-' . $post->ID; ?>">
<?php get_template_part('template-parts/navigation/navigation', 'top'); ?>

    <div class="container">
        <div class="row">
            <div class="col offset-lg-5 col-lg-7">
                <?php while (have_posts()) : the_post(); ?>

                    <div class="entry-content-page">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>
