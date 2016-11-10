<header class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
          <div class="logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo2.png" class="img-responsive" />
          </div>
        </a>
      </div>
      <div class="col-md-4">
        <?php get_template_part('templates/social'); ?>
      </div>
    </div>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
        </div>
    </nav>
  </div>
</header>
