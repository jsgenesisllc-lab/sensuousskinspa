<?php
/**
 * Template Name: Home
 * Description: Simple Home Page Template using ACF Free
 */
get_header();
?>

<main class="home-page">


 <?php
// Get ACF Hero Fields
$hero_background = get_field('hero_background');
$hero_heading = get_field('hero_heading');
$hero_subheading = get_field('hero_subheading');
$hero_description = get_field('hero_description');
$hero_button_text = get_field('hero_button_text');
$hero_button_link = get_field('hero_button_link');
?>

<section class="hero-section" style="background-image: url('<?php echo esc_url($hero_background['url']); ?>');">
  <div class="hero-overlay"></div>

  <div class="hero-content">
    <?php if ($hero_heading): ?>
      <h1><?php echo esc_html($hero_heading); ?></h1>
    <?php endif; ?>

    <?php if ($hero_subheading): ?>
      <h2><?php echo esc_html($hero_subheading); ?></h2>
    <?php endif; ?>

    <?php if ($hero_description): ?>
      <p><?php echo esc_html($hero_description); ?></p>
    <?php endif; ?>

    <?php if ($hero_button_text && $hero_button_link): ?>
      <a href="<?php echo esc_url($hero_button_link); ?>" class="hero-btn">
        <?php echo esc_html($hero_button_text); ?>
      </a>
    <?php endif; ?>
  </div>
</section>
