<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
</head>

<body>
<div class="container">
    <header class="page-header">
        <div class="header-top-left">
            <?php the_custom_logo(); ?>
        </div>
        <div class="header-top-right">
            <?php
            wp_nav_menu(["theme_location" => "main-menu", "container" => "nav"]);
            ?>
        </div>
    </header>