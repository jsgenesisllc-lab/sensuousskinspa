<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<?php
// Get ACF header fields from front page
$page_id = is_front_page() ? get_the_ID() : get_option('page_on_front');
$logo = get_field('logo', $page_id);
$btn_text = get_field('header_button_text', $page_id);
$btn_link = get_field('header_button_link', $page_id);
?>

<header class="site-header">
  <div class="header-inner">
    <!-- Left: Logo -->
    <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
      <?php if (!empty($logo['url'])): ?>
        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
      <?php else: ?>
        <span class="logo-text"><?php bloginfo('name'); ?></span>
      <?php endif; ?>
    </a>

    <!-- Center: Navigation -->
    <nav class="main-nav">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'menu',
        'fallback_cb' => function() {
          echo '<ul class="menu"><li><a href="/">Home</a></li><li><a href="/about">About</a></li><li><a href="/services">Services</a></li></ul>';
        }
      ]);
      ?>
    </nav>

    <!-- Right: Button -->
    <?php if ($btn_text && $btn_link): ?>
      <a href="<?php echo esc_url($btn_link); ?>" class="header-btn">
        <?php echo esc_html($btn_text); ?>
      </a>
    <?php endif; ?>
  </div>
</header>
