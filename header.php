<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
</head>
<body>
  <header>
    <nav>
      <?php wp_nav_menu(['theme_location' => 'main_menu']); ?>
    </nav>
  </header>
</body>