<?php

get_header(); ?>
			<div class="main-content">
					<?php
					if(have_posts()):

						while (have_posts()):the_post();  ?>
						<h2><?php the_title(); ?></h2>
						
						<?php the_content(); ?>

						<?php
						endwhile;
						
					else:
						echo "No content";

					endif;
						?>
				</div>
<?php
get_footer();
?>