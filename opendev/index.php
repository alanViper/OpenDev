<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/blog.css" />
<div class="wrapper">
	<section>
		<?php if (have_posts()): while (have_posts()) : the_post();?>
		<div class="content">
			<h1><a href="<?php the_Permalink()?>"><?php the_title();?></a></h1>
			
			<p class="date_post">Postado em <?php the_date('d/m/Y'); ?> Por <?php the_author(); ?></p>

			<p><?php the_excerpt(); ?></p>
		</div>
		<?php endwhile;?>
		<?php endif;?> 
	</section>
</div>
<?php get_footer(); ?>
