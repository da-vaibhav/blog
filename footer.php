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
			<?php //do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo //esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php //esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( //__( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript" src="http://www.idyllic-software.com/blog/wp-content/themes/ISI-BLOG/js/shCore.js"></script>
<script type="text/javascript" src="http://www.idyllic-software.com/blog/wp-content/themes/ISI-BLOG/js/shAutoloader.js"></script>
<script type="text/javascript" src="http://www.idyllic-software.com/blog/wp-content/themes/ISI-BLOG/js/shBrushJScript.js"></script>
<script>
	alert('done');
	SyntaxHighlighter.all();

</script>
</body>
</html>