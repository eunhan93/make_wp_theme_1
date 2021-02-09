<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <style>
    html{
      margin-top: 0 !important;
    }
    html, body{
      width: 100%;
    }
  </style>
</head>
<body <?php body_class(); ?>>

<div class="wrap">
  <header class="header">
    <h1 class="logo">K!sbag Design Studio</h1>
    <input type="checkbox" id="menu"><label for="menu">Menu</label>
  </header>
  <div class="container">