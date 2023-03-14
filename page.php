<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();
?>
<div>
		<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php
				the_content();

				wp_link_pages(
					array(
						'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'bootstrap-nutriwiki' ) . '">',
						'after'    => '</nav>',
						'pagelink' => esc_html__( 'Page %', 'bootstrap-nutriwiki' ),
					)
				);
				edit_post_link(
					esc_attr__( 'Edit', 'bootstrap-nutriwiki' ),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</div><!-- /#post-<?php the_ID(); ?> -->
</div><!-- /.row -->
<?php
get_footer();
