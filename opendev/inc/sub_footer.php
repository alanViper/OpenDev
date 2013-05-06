	<section>
		<div id="box_blog" class="box">
			<h1>Blog</h1>
			<ul class="box_list">
			<?php query_posts ('posts_per_page = 6'); ?>
				<?php if (have_posts()): while (have_posts()) : the_post();?>
				<li>
					<a href="<?php the_Permalink()?>"><?php the_time('d/m/Y');?> - <?php the_title();?></a>
				</li>
				<?php endwhile; else:?>
				<li>
					<a href="">Ainda não temos nenhum post :(</a>
				</li>
				<?php endif;?> 
			</ul>
		</div>
	</section>

	<section>
		<div id="box_flickr" class="box">
			<h1>Fotos</h1>
			<a href="http://www.flickr.com/photos/95051897@N03/"><img src="<?php bloginfo('template_directory'); ?>/images/flickr.png" id="flickr" alt="" title="" /></a>
			<ul id="box_photos">
				<script type="text/javascript">
				function jsonFlickrFeed(url){
					n = 0;
					while(url.items[n]){
						if(n < 15){
							_m = url.items[n].media.m;
							_s = _m.replace("_m", "_s");
							img = "<li><a href=\""+url.items[n].link+"\" target=\"_blank\">";
							img += "<img src=\""+_s+"\" alt=\""+url.items[n].title+"\" width=\"65\" height=\"65\" />";
							img += "</a></li>";
							document.write(img);
						}
						n++;
					}
				}
				</script>
				<script src="http://api.flickr.com/services/feeds/photoset.gne?set=72157633274499299&nsid=95051897@N03&lang=pt-br&format=json" type="text/javascript"></script>
			</ul>
		</div>
	</section>
