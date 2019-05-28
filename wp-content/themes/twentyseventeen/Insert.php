<?php
/*
	Template Name: InsertProduct
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<h1>Add new Product</h1>

			<form method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="title" class="form-control">
				</div>
				<div class="form-group">
					<label>Link</label>
					<input type="text" name="link" class="form-control">
				</div>
				<div class="form-group">
					<label>Image</label>
					<input type="file" name="image" class="form-control">
				</div>
				<br>
				<div>
					<input type="submit" value="Submit" class="btn btn-primary" name="submit">
				</div>
			</form>
		<?php
		// send data to database
			if(isset($_POST['submit'])){
				$product_data = array(
					'title' => $_POST['title'],
					'link' => $_POST['link'],
					'image' => $_FILES['image']['name']
				);
				global $wpdb;
				$post_id = $wpdb->insert('products', $product_data);
				
				$upload = wp_upload_bits( $_FILES['image']['name'], null, file_get_contents( $_FILES['image']['tmp_name'] ) );

    			$wp_filetype = wp_check_filetype( basename( $upload['file'] ), null );

				$wp_upload_dir = wp_upload_dir();
				
				$attachment = array(
					'guid' => $wp_upload_dir['baseurl'] . _wp_relative_upload_path( $upload['file'] ),
					'post_mime_type' => $wp_filetype['type'],
					'post_title' => preg_replace('/\.[^.]+$/', '', basename( $upload['file'] )),
					'post_content' => '',
					'post_status' => 'inherit'
				);
				
				$attach_id = wp_insert_attachment( $attachment, $upload['file'], $post_id );
			
				require_once(ABSPATH . 'wp-admin/includes/image.php');
			
				$attach_data = wp_generate_attachment_metadata( $attach_id, $upload['file'] );
				wp_update_attachment_metadata( $attach_id, $attach_data );
			
				update_post_meta( $post_id, '_thumbnail_id', $attach_id );


				if($post_id){
					echo "<script>alert('Product added!')</script>";
				} else {
					echo "<script>alert('Try again!')</script>";
				}
			}
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
