<!DOCTYPE html>
<html lang="en-US">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<head>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>

    <!-- Included via Site Options -->
    <?php
    if (get_field("site_header_code") != "") {
        echo $get_field("site_header_code");
    }
    ?>
    <!-- End Site Options -->

</head>

<body <?php body_class(); ?>>
    <!-- Included via Site Options -->
    <?php
    if (get_field("site_header_code") != "") {
        echo $get_field("site_body_code");
    }
    ?>
    <!-- End Site Options -->
    <header class="header js-header">
        <div class="container">
            <div class="logo__container">
                <a href="<?php echo esc_url(home_url()); ?>" class="logo__link">
                    <div class="logo__wrap">
                        <img class="header__logo-image" src="<?php echo get_template_directory_uri() ?>/uploads/logoo.png" alt="Image of a logo" />
                    </div>
                    <meta itemprop="name" content="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <a href="#" class="mobileNav__toggle js-nav-toggle">
                <span class="accessible-text">Click to toggle navigation menu.</span>
                <div class="menuBar__container">
                    <span class="menuBar"></span>
                    <span class="menuBar"></span>
                    <span class="menuBar"></span>
                </div>
            </a>
            <?php
            $menuArgs = array(
                'container' => false,
                'menu' => 'Main Navigation',
                'menu_class' => 'primaryNav'
            );
            wp_nav_menu($menuArgs);
            ?>

            <div class="header-nav">
                <div class="header-top">
                    <input type="text" id="currentDate">
                   
                    <div class="header-menu">
                        <div class="header-socialmedia">
                            <ul class="header-socialmedia__list">
                                <li><a href="#" target="_blank"><svg class="icon icon-twitter">
                                            <use xlink:href="#icon-twitter"></use>
                                        </svg></a></li>
                                <li><a href="#" target="_blank"><svg class="icon icon-fb">
                                            <use xlink:href="#icon-fb"></use>
                                        </svg></a></li>
                                <li><a href="#" target="_blank"><svg class="icon icon-msg">
                                            <use xlink:href="#icon-msg"></use>
                                        </svg></a></li>
                            </ul>
                        </div>
                        <div class="header-bandwidt">
                            <div class="header-info">
                                <p>Low Bandwidth</p>
                                <div class="header-info__links">
                                    <a href="#">A</a>
                                    <a class="link-alt" href="#">A</a>
                                </div>
                            </div>
                            <div class="header-info">
                                <p>Screen Reader</p>
                                <div class="header-info__list">
                                    <a href="#">-</a>
                                    <span>A</span>
                                    <a href="#">+</a>
                                </div>
                            </div>
                            <div class="header-language">
                                <button>EN</button>
                                <label class="switch">
                                    <input type="checkbox" checked>
                                    <span></span>
                                </label>
                                <button>NP</button>
                            </div>
                        </div>
                    </div>
                    <figure class="nepal">
                        <img class="nepal__img" src="<?php echo get_template_directory_uri() ?>/uploads/flag.png" alt="Flag of Nepal" />
                    </figure>
                </div>
                <div class="header-bottom">

                    <ul class="main-title">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg></a>
                            <ul class="title">
                                <li><a href="#">menu </a></li>
                                <li><a href="#">menu </a></li>
                                <li><a href="#">menu </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Major Programs <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg></a>
                            <ul class="title">
                                <li><a href="#">menu </a></li>
                                <li><a href="#">menu </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Online Services <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg></a>
                            <ul class="title">
                                <li><a href="#">menu </a></li>
                                <li><a href="#">menu </a></li>
                            </ul>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">More <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-arrow"></use>
                                </svg></a>
                            <ul class="title">
                                <li><a href="#">menu </a></li>
                                <li><a href="#">menu </a></li>
                                <li><a href="#">menu </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>