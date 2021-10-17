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
  <div class="header__top">
    <div class="container">
      <p>Envíos a toda la republica desde $160 - Envio gratis en compras mayores a $1399</p>
    </div>
  </div>

  <div class="overlay has-fade"></div>

  <nav>
    <div class="d-flex justify-content-between align-items-end container">
      <a href="/" class="header__logo">
        <img src="<?php bloginfo('template_directory') ?>/images/logo.png" alt="kary sports logo">
      </a>

      <a id="btnHamburger" href="#" class="header__toggle d-block d-lg-none">
        <span></span>
        <span></span>
        <span></span>
      </a>

      <ul class="header__links d-none d-lg-block">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Tienda</a></li>
        <li><a href="#">FAQ'S</a></li>
        <li><a href="#">Contacto</a></li>
        <li><i class="fa fa-user"></i></li>
        <li><i class="fas fa-shopping-cart"></i></li>
      </ul>
    </div>
  </nav>

  <div class="header__menu has-fade">

    <ul class="links-mobile">
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Nosotros</a></li>
      <li><a href="#">Tienda</a></li>
      <li><a href="#">FAQ'S</a></li>
      <li><a href="#">Contacto</a></li>
      <li><i class="fa fa-user"></i></li>
      <li><i class="fas fa-shopping-cart"></i></li>
    </ul>

  </div>
</header>