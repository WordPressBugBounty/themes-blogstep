<?php
if (!function_exists('blogstep_header_section')) :
  /**
   *
   * @since Blogstep
   *
   */
  function blogstep_header_section(){ ?>
     <!--header--> 
      <header class="bs-headfive"> 
      <!-- Main Menu Area-->
      <div class="bs-header-main d-none d-lg-block">
        <div class="inner">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-4">
                <?php do_action('blogus_action_header_social_section'); ?>
              </div>
              <div class="navbar-header col-lg-4">
                <!-- Display the Custom Logo -->
                <div class="site-logo">
                    <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
                </div>
                <div class="site-branding-text <?php echo esc_attr( display_header_text() ? ' ' : 'd-none'); ?>">
                  <?php if (is_front_page() || is_home()) { ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></h1>
                  <?php } else { ?>
                    <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                  <?php } ?>
                    <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
                </div>
              </div>
              <div class="col-lg-4 d-none d-lg-flex justify-content-end">
                <!-- Right nav -->
                <div class="info-right right-nav d-flex align-items-center justify-content-center justify-content-md-end">
                <?php blogus_menu_btns(); ?>
                </div>
                <!-- /Right nav -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Main Menu Area-->
      <div class="bs-menu-full">
        <nav class="navbar navbar-expand-lg navbar-wp">
          <div class="container">
            <!-- Right nav -->
            <div class="m-header align-items-center">
              <!-- navbar-toggle -->
              <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-wp" aria-controls="navbar-wp" aria-expanded="false"
                aria-label="Toggle navigation"> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-header">
                  <!-- Display the Custom Logo -->
                  <div class="site-logo">
                      <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
                  </div>
                  <div class="site-branding-text <?php echo esc_attr( display_header_text() ? ' ' : 'd-none'); ?>">
                    <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                    <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
                  </div>
              </div>
              <div class="right-nav"> 
                <?php blogus_menu_search() ?>
              </div>
            </div>
            <!-- /Right nav -->
            <!-- Navigation -->
            <!-- Navigation -->
              <div class="collapse navbar-collapse" id="navbar-wp">
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'  => 'nav-collapse collapse '.(is_rtl() ? 'navbar-inverse-collapse': ''),
                    'menu_class' => 'nav navbar-nav mx-auto '.(is_rtl() ? 'sm-rtl': ''),
                    'fallback_cb' => 'blogus_fallback_page_menu',
                    'walker' => new blogus_nav_walker()
                  ) ); ?>
              </div>
            <!-- Right nav -->
             
            <!-- /Right nav -->
          </div>
        </nav>
      </div>
      <!--/main Menu Area-->
    </header>
    <?php
  }
endif;
add_action('blogstep_action_header_section', 'blogstep_header_section', 40);