<? get_header(); ?>
				<div class="content">
				<? get_sidebar(); ?>
					<div class="single_page">
						<div class="h1"><?php the_title(); ?></div>

		        	<?php if (have_posts()) : ?>
		  			<?php while (have_posts()) : the_post(); ?>
						<div class="single_page__content">
							<?php the_content(); ?>
						</div>
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			    <div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div><!--end pagination-->
			<?php else : ?>
			<?php endif; ?>

					</div> <!-- single_page end-->
				</div>	<!-- content end-->
			</div>	<!-- container end-->
		</div>	<!-- main end-->
<? get_footer(); ?>