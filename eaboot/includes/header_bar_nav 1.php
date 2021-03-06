<?php /* Navbar Wrapper */ ?>

<!-- header_bar_nav file -->

<div class="navbar navbar-static-top">

  <?php /* Navbar Inner Wrapper */ ?>
  <div class="navbar-inner">

    <?php /* Navbar Container */ ?>
    <div class="container">

      <?php /* Responsive Navbar Menu Button */ ?>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <span class="navbar-explain">Menu >></span>
      <?php /* End Responsive Navbar Menu Button */ ?>

      <?php if (eaboot_option('brand_header_nav') == 1) { ?>
        <?php /* Site Name */ ?>
        <a class="brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        <?php /* End Site Name */ ?>
      <?php } ?>

      <?php /* Menu Items Container */ ?>
      <div class="nav-collapse collapse">
        <?php wp_nav_menu(array('container' => '', 'menu_class' => 'nav', 'theme_location' => 'header-nav')); ?>
      </div>
      <?php /* End Menu Items Container */ ?>

    </div>
    <?php /* End Navbar Container */ ?>

  </div>
  <?php /* End Navbar Inner Container */ ?>

</div>
<?php /* End Navbar Wrapper */ ?>