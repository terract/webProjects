<? get_header(); ?>
				<div class="content">
				<? get_sidebar(); ?>
					<div class="posts">
						<div class="h1">новости</div>

		        	<?php if (have_posts()) : ?>
		  			<?php while (have_posts()) : the_post(); ?>
						<div class="post post__active clearfix">
							<div class="post__left">
								<div class="post__date"><?php the_time('j'); echo "<br>";  the_time('F');?></div>
								<a href="<?php the_permalink() ?>">подробнее</a>
							</div>
							<div class="post__content">
								<strong><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></strong>
								<?php the_content(); ?>
							</div>
						</div>
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
			    <div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div><!--end pagination-->
			<?php else : ?>
			<?php endif; ?>

					</div> <!-- posts end-->
				</div>	<!-- content end-->
			</div>	<!-- container end-->
		</div>	<!-- main end-->
<? get_footer(); ?>