<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo get_bloginfo('name') ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu(array(
            'menu' => 'primary',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarNav',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker())
    );
    ?>
</nav>
