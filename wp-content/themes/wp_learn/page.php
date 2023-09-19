<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_learn_theme
 */

get_header();
?>

<?php

if (have_rows('template_blocks')) :

	while (have_rows('template_blocks')) : the_row();

		if (get_row_layout() == 'banner_section') :

			get_template_part('templates/banner', 'section');
			
		elseif( get_row_layout() == 'solution_services_section' ):

			get_template_part( 'templates/solution_services', 'section' );

		endif;

	endwhile;
endif;
?>

<?php
//get_sidebar();
get_footer();
