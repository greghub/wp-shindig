<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'mtdemo_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'mtdemo' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'mtdemo' ); ?>"><?php printf( __( 'Proudly powered by %s', 'mtdemo' ), 'WordPress' ); ?></a>
			<span>&</span> 
			<a href="<?php echo esc_url( __( 'http://www.tri.be', 'mtdemo' ) ); ?>" title="<?php esc_attr_e( 'Digital Agency', 'mtdemo' ); ?>" class="modern-tribe-logo"><img src="<?php bloginfo('template_url');?>/images/mtlogo.png"></a>
		</div><!-- .site-info -->
		<div class="attribution">
			<small>Mouse Icon courtesy of <a href="http://thenounproject.com/cbertoco">Camila Bertoco</a> from <a href="http://thenounproject.com/">The Noun Project</a>. Server Icon courtesy of <a href="http://thenounproject.com/danielcampos15">Daniel Campos</a> from <a href="http://thenounproject.com/">The Noun Project</a>.</small>
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php  ?> 
<?php wp_footer(); ?>
</body>
</html>
