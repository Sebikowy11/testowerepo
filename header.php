<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styl.css"/>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/uikit.min.css" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/uikit.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/uikit-icons.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md">

		<?php if ( 'container' == $container ) : ?>
			<div class="navbarcontent">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.png"/>
		<?php endif; ?>



				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<div class="navbarcontent1">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.png"/>
				<div id="expandmenu"><i class="fas fa-bars text-white mobile-menu-button" ></i></div>
					<div id="mobile-menu" class="mobile-menu">
						<a class="menu-item-mobile">Zespół</a>
						<a class="menu-item-mobile">Dla Firm</a>
						<a class="menu-item-mobile">Dla Ciebie</a>
						<a class="menu-item-mobile">Blog</a>
						<a class="menu-item-mobile">Do pobrania</a>
						<a class="menu-item-mobile">Kontakt</a>
					</div></div>
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
