<!DOCTYPE html>


<html <?php language_attributes();   ?>>
</head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width">
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
	

	<header class="site-header">
	<div class="logo">
		<img src="http://localhost/piny/wp-content/uploads/2016/08/logo.png">
	</div>	
		<nav class="site-nav">
		<?php
		$args=array(
		'theme_location' =>'primary'
		);
		?>
		
		<?php wp_nav_menu( $args); ?>
		</nav>
	</header>