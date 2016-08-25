
<footer class="site-footer">
		
		<nav class="site-nav">
		<?php
		$args=array(
		'theme_location' =>'footer'
		);
		?>
		<?php wp_nav_menu($args); ?>
		</nav>

	<p>  &copy; <?php echo date('Y');?> rtpanel . All rights reserved. Designed by rtcamp</p>
	<div class="footer_logo">
	<img src="http://localhost/piny/wp-content/uploads/2016/08/footer-logo.png">
	</div>
</footer>
<?php wp_footer(); ?>

</div> <!--container-->
</body>
</html>