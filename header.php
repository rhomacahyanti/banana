<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tokopedia Blog</title>
    <?php wp_head(); ?>
  </head>
    <body>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Tokopedia Blog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
              wp_nav_menu(array(
                  'theme_location' => 'primary-menu',
                  'container' => false,
                  'menu_class'  => 'navbar-nav mr-auto navbar-right',
  			          'walker' => new Bootstrap_NavWalker(),
  			          'fallback_cb' => 'Bootstrap_NavWalker::fallback',
                )
              );
            ?>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
