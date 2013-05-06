<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blog.css" />
<div class="wrapper">
<section>
		<div class="content">
		<?php if (have_posts()): while (have_posts()) : the_post();?>
			<h1><?php the_title();?></h1>
			
			<p class="date_post">Postado em <?php the_date('d/m/Y'); ?> Por <?php the_author(); ?></p>

			<p><?php the_content();?></p>
			<?php endwhile;?>
		<?php endif;?>  
			
		</div>
	</section>
	
	<section>
		<br /><br />
		<div id="disqus_thread"></div>
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'opendevgroup'; // required: replace example with your forum shortname

			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

	</section>
</div>
<?php get_footer(); ?>
