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
				<span class="entry-title-main"><?php the_title('', ''); ?></span>
				<span class="entry-title-sub"><?php the_field("subtitle", $post->ID) ?></span>
			</a>
		</h1>
	</header>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<p><a class="more-link" href="<?php the_permalink(); ?>" rel="bookmark">
			<?php
				/* translators: %s: Name of page. Visible to screen readers only. */
				printf( __( 'Read more %s', 'edin' ), the_title( '<span class="screen-reader-text">', '</span>', false ) );
			?>
		</a></p>
	</div><!-- .entry-summary -->

	<?php edit_post_link( __( 'Edit', 'edin' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
