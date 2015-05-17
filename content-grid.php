<?php
/**
 * The template used for displaying featured page content in page-templates/front-page.php
 *
 * @package wp-theme-hospital
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>">
		<?php
			$ratio = get_theme_mod( 'edin_thumbnail_style' );
			switch ( $ratio ) {
				case 'square':
					the_post_thumbnail( 'edin-thumbnail-square' );
					break;
				default :
					the_post_thumbnail( 'edin-thumbnail-landscape' );
			}
		?>
		<header class="entry-header">
			<h1 class="entry-title">
				<div class="entry-title-main"><?php the_title('', ''); ?></div>
				<div class="entry-title-sub"><?php the_field("subtitle", $post->ID) ?></div>
			</h1>
		</header>
	</a>
</article><!-- #post-## -->
