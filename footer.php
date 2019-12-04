<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="" id="wrapper-footer">

	<div class="">

		<div class="row">

			<div class="col-md-12 dark-right">

				<footer class="site-footer fottercontent" id="colophon">
					<div class="row ">

					<div class="col-3">
						<img class="pt-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.png"/>
						</div>
						<div class="fottermenu col-sm-12  col-md-1">
							<p class="fottermenuheader  pt-5 pb-3">ZESPÓŁ</p>
							<a class="text-white py-3 my-5">O nas</a><br>
							<a class="text-white py-3 my-5">Lorem</a><br>
							<a class="text-white py-3 my-5">Kariera</a><br>
							<i class="fa fa-facebook"></i>
						</div>
						<div class="fottermenu col-sm-12  col-md-3">
							<p class="fottermenuheader pt-5 pb-3">DLA FIRM</p>
							<a class="text-white py-3 my-5">Obsługa prawna przedsiębiorców </a><br>
							<a class="text-white py-3 my-5">Obsługa prawna firm </a><br>
							<a class="text-white py-3 my-5">Obsługa prawna spółek </a><br>
							<a class="text-white py-3 my-5">Obsługa prawna pracodawców </a><br>
						</div>

						<div class="fottermenu col-sm-12  col-md-3">
							<p class="fottermenuheader pt-5 pb-3">DLA CIEBIE</p>
							<a class="text-white py-3 my-5">Spadki</a><br>
							<a class="text-white py-3 my-5">Rozwody i podziały majątku</a><br>
							<a class="text-white py-3 my-5">Alimenty i kontakt z dzieckiem</a><br>
							<a class="text-white py-3 my-5">Sprawy karne</a><br>
							<a class="text-white py-3 my-5">Prawo pracy</a><br>
							<a class="text-white py-3 my-5">Windykacja</a><br>
							<a class="text-white py-3 my-5">Inne</a><br>
						</div>
						<div class="fottermenusocial text-center col-sm-12  col-md-2">
							<p class="fottermenuheader pt-5 pb-3">SOCIAL MEDIA</p>
							<i class="fa fa-facebook facebook-logo mx-1 my-auto" style="font-size:26px; border-radius: 50%; background-color: rgba(255, 255, 255, .5); color: white !important; width: 40px; height: 40px; text-align: center;"></i>
							<i class="fa fa-facebook facebook-logo mx-1 my-auto" style="font-size:26px; border-radius: 50%; background-color: rgba(255, 255, 255, .5); color: white !important; width: 40px; height: 40px; text-align: center;"></i>
							<i class="fa fa-facebook facebook-logo mx-1 my-auto" style="font-size:26px; border-radius: 50%; background-color: rgba(255, 255, 255, .5); color: white !important; width: 40px; height: 40px; text-align: center;"></i>
						</div>
					<!-- .container -->
					</div>
				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
<script src="<?php echo get_template_directory_uri(); ?>/js/myscripts.js"></script>
<script>




</script>

</html>
