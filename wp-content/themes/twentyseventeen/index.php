<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
			<?php
				global $wpdb;
				$results = $wpdb->get_results("SELECT * FROM products");
				foreach($results as $result){ ?>
				<div class="col-md-4 mb-3">
					<div class="card" style="width: 18rem;">
						<img class="card-img-top" src="wp-content/uploads/2019/05/<?= $result->image ?>" alt="Image" style="height: 12rem;">
						<div class="card-body text-center">
							<h5 class="card-title text-center"><?= $result->title ?></h5>
							<a href="<?= $result->link ?>" class="btn btn-primary" target="_blank">LINK</a>
						</div>
					</div>
				</div>
				<?php } 
			?>
			</div>
			

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
