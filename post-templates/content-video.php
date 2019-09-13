<div <?php post_class(); ?>>
						<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h2>
						<p class="meta">Posted by <?php the_author_posts_link() ; ?> <?php echo get_the_date(); ?>
							&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <?php echo get_the_tag_list( ); ?></p>
							<span class="dashicons dashicons-video-alt3"></span>
						<div class="entry">
							<p>
								<?php
									if(has_post_thumbnail()){
										$thumbnail_url= get_the_post_thumbnail_url(null,"large");
										echo '<a href="'.$thumbnail_url.'" data-featherlight="image">';
										the_post_thumbnail("medium",array('class' => 'alignleft border'));
										echo '</a>';
										//the_post_thumbnail("medium",array('class' => 'alignleft border'));
										//the_post_thumbnail("medium","class => 'alignleft border'");
									}
								?>
							<p>
							<p><?php 
								the_excerpt();
								
							?></p>
						</div>
					</div>