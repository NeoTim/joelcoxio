<?php get_header();?>
				<div class="ss">
					<div class="dd blog">
						<section>
							<div class="item blog">
								<div class="page-head">
									<div class="row">
										<div class="col-md-5">
											<h3><?php the_title();?></h3>
										</div>
										
									</div>
								</div>
							 <?php while(have_posts() ) : the_post(); ?>
								<?php the_content();?>
								<?php endwhile; wp_reset_query(); ?>
							</div>
						</section>

<?php get_footer();?>