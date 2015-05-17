<?php
/**
 * The template used for displaying featured page content in page-templates/front-page.php
 *
 * @package wp-theme-hospital
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
$featured_image = wp_get_attachment_image_src(
	get_post_thumbnail_id(get_the_ID()),
	'post-thumbnail');
?>

	<a href="<?php esc_url(the_permalink()); ?>" class="entry-title entry-title-grid" style="background-image: url(<?php echo $featured_image[0]; ?>);">
		<div class="entry-title-inner">
				<h2 class="entry-title-main"><?php the_title('', ''); ?></h2>
				<div class="entry-title-sub"><?php the_field("subtitle", $post->ID) ?></div>
		</div>
	</a>

</article><!-- #post-## -->
