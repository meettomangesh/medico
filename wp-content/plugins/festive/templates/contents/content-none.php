<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Festive
 */
?>

<section class="no-results not-found">
	
	<header class="page-header">
		<h1 class="page-title"><?php echo wp_kses_post( get_theme_mod( 'festive-website-nosearch-head', __( 'Nothing Found', 'festive' ) ) ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'festive' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>
        
            <p><?php echo wp_kses_post( get_theme_mod( 'festive-website-nosearch-msg', __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'festive' ) ) ) ?></p>

		<?php else : ?>

			<p><?php echo wp_kses_post( get_theme_mod( 'festive-website-nosearch-msg', __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'festive' ) ) ) ?></p>

		<?php endif; ?>
        
	</div><!-- .page-content -->
    <div class="clearboth"></div>
    
</section><!-- .no-results -->