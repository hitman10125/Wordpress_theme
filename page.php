<?php 
get_header();

if(have_posts()):

	while (have_posts()):the_post();  ?>
			<article class="post">

				<div class="first_content">
				
				<!-- <?php the_post_thumbnail(); ?> -->

				<img src="http://localhost/piny/wp-content/uploads/2016/08/Slider_img.jpg" width=100%>
				<div class="slider"><?php the_content(); ?></div>
				</div>
			</article>	

	<div class="second_content">

			  <div id="tabs">
			    <ul>
			      	<?php		
			      		$sub_pages = [];
						$main = get_pages(array('parent' => $post->ID));
						foreach ($main as $value) {
							$title = $value->post_title;
							$id = $value->ID; 
							array_push($sub_pages, $id);
							echo '<li><a href="#'.$id.'">'.$title.'</a></li>';
						}
					?>			          
		      </ul>

		      	<?php
		      		foreach ($main as $key => $value) {

		      			echo '<div id="'.$value->ID.'">';
		      			$sub_main = get_pages(array('parent' => $value->ID));
						foreach ($sub_main as $value) {
							$title = $value->post_title;
							$sub_id = $value->ID; 
							
							echo '<li><a href="#'.$sub_id.'">'.get_the_post_thumbnail($sub_id).$value->post_title.$value->post_content.'</a></li>';
						}
		      			echo '</div>';
		      		}
			    ?>
			      
			  </div>
	</div>
	<?php endwhile;

	else:
		echo '<p>No content</p>';

	endif;
?>




<div class="widgets">
<nav class="wid">
<?php dynamic_sidebar('widget1'); ?>
</nav>
</div>

<?php
get_footer();
?>

<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript">
	jQuery('#tabs')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');

</script>