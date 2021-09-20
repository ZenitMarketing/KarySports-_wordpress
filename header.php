<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>

  <title>Zenit Marketing</title>
</head>
<body>

<header class="header">

    <nav>
      <div class="d-flex justify-content-between align-items-center container">
        <a href="/" class="header__logo">
          <img src="<?php bloginfo('template_directory') ?>/images/zenit_text_logo.png" alt="zenit logo">
        </a>

        <a id="btnHamburger" href="#" class="header__toggle d-block d-lg-none">
          <span></span>
          <span></span>
          <span></span>
        </a>

        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'top_menu',
              'menu' => 'main-menu',
              'container' => 'ul',
              'menu_class' => 'header__links d-none d-lg-block'
            )
          )
        ?>

      </div>
    </nav>

    <div class="header__menu has-fade">

      <?php 
        wp_nav_menu(
          array(
            'theme_location' => 'top_menu',
            'menu' => 'mobile-menu',
            'container' => 'ul',
            'menu_class' => 'links-mobile'
          )
        )
      ?>

    </div>
  </header>
  
 <!--  <header class="header">

    <div class="overlay has-fade"></div>

    <div class="socials d-none d-lg-block">
      <div class="container d-flex justify-content-end">
        <a href="https://www.facebook.com/" target="_blank" rel="noreferrer">
          <img src="<?php bloginfo('template_directory') ?>/images/face.svg" alt="mail icon">
        </a>
        <a href="https://www.instagram.com/" target="_blank" rel="noreferrer">
          <img src="<?php bloginfo('template_directory') ?>/images/insta.svg" alt="mail icon">
        </a>
        <a href="https://web.whatsapp.com/" target="_blank" rel="noreferrer">
          <img src="<?php bloginfo('template_directory') ?>/images/whats.svg" alt="mail icon">
        </a>
        <a href="mailto:netfishmexico@gmail.com">
          <img src="<?php bloginfo('template_directory') ?>/images/mail.svg" alt="mail icon">
        </a>

        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'languages_menu',
              'menu' => 'languages-menu',
              'container' => 'ul',
              'menu_class' => 'lang-links'
            )
          )
        ?>
      </div>
    </div>

    <nav>
      <div class="d-flex justify-content-between align-items-center container">
        <a href="/" class="header__logo">
          <img src="<?php bloginfo('template_directory') ?>/images/logo-white.png" alt="Logo">
        </a>
  
        <a id="btnHamburger" href="#" class="header__toggle d-block d-lg-none">
          <span></span>
          <span></span>
          <span></span>
        </a>

        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'top_menu',
              'menu' => 'main-menu',
              'container' => 'ul',
              'menu_class' => 'header__links d-none d-lg-block'
            )
          )
        ?>
  
      </div>
    </nav>

    <div class="header__menu has-fade">

      <?php 
        wp_nav_menu(
          array(
            'theme_location' => 'top_menu',
            'menu' => 'mobile-menu',
            'container' => 'ul',
            'menu_class' => 'links-mobile'
          )
        )
      ?>

      <div class="mobile-socials d-flex justify-content-center">
        <a href="https://www.facebook.com/" target="_blank" rel="noreferrer">
          <img src="<?php bloginfo('template_directory') ?>/images/face.svg" alt="mail icon">
        </a>
        <a href="https://www.instagram.com/" target="_blank" rel="noreferrer">
          <img src="<?php bloginfo('template_directory') ?>/images/insta.svg" alt="mail icon">
        </a>
        <a href="https://web.whatsapp.com/" target="_blank" rel="noreferrer">
          <img src="<?php bloginfo('template_directory') ?>/images/whats.svg" alt="mail icon">
        </a>
        <a href="mailto:netfishmexico@gmail.com">
          <img src="<?php bloginfo('template_directory') ?>/images/mail.svg" alt="mail icon">
        </a>
      </div>

      <div class="d-flex justify-content-center">
        <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'languages_menu',
              'menu' => 'languages-menu',
              'container' => 'ul',
              'menu_class' => 'lang-links'
            )
          )
        ?>
      </div>
    </div>
  </header> -->