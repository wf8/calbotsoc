	<?php get_header(); ?>

			<div id="content">

					<div id="main">
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

									<?php the_content(); ?>

							<?php endwhile; else : ?>

							<?php endif; ?>

					</div>

					<?php get_sidebar(); ?>

			</div>

	<?php get_footer(); ?>
