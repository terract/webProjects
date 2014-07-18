<? get_header(); ?>
				<div class="content">
				<? get_sidebar(); ?>
					<div class="posts">
						<div class="h1">Продукция</div>
					
					<div class="production-full-text">
						<div class="img bordered"><img src="/img/big-production-img.png" alt=""></div>
						<div id="production-info">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
							Dolorem voluptatibus nostrum minima illo! Provident molestias, ipsa iure illo, 
							quam explicabo atque reprehenderit, minus, officia esse dolorum dolor architecto at rem? 
							Architecto debitis quis nobis provident iusto cupiditate magni, accusamus molestias qui sunt 
							rerum dignissimos ipsa placeat earum non corporis maxime!
						</div>
					</div>

		        	<?php if (have_posts()) : ?>
		  			<?php while (have_posts()) : the_post(); ?>
						<div class="box-for-production">
							<div class="name-production"><?php the_title(); ?></div>
							<div class="img"><?the_post_thumbnail()?></div> 
							<div class="full-text"><?php the_excerpt(); ?></div>  
						</div>
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

			<?php else : ?>
			<?php endif; ?>

					</div> <!-- posts end-->
					<div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div><!--end pagination-->
				</div>	<!-- content end-->
			</div>	<!-- container end-->
		</div>	<!-- main end-->
<? get_footer(); ?>