<?php
/**
 * The template used for displaying featured page content in page-templates/front-page.php
 *
 * @package wp-theme-hospital
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php edin_post_thumbnail(); ?>

	<header class="entry-header">
		<h1 class="entry-title">
			<a href="<?php esc_url(get_permalink()); ?>" rel="bookmark">
				<div class="entry-title-main"><?php the_title('', ''); ?></div>
				<div class="entry-title-sub"><?php the_field("subtitle", $post->ID) ?></div>
			</a>
		</h1>
	</header>
</article><!-- #post-## -->
