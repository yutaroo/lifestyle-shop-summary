<?php get_header(); ?>

<main id="contact_contents" class="wrap clearfix">

<div id="content">
			
			<!--記事はじめ-->
		<?php if(have_posts()): ?><!--一つでも記事があったら-->
		<?php while(have_posts()): the_post(); ?>
			
            <article class=" clearfix">
            	<div class="contact_text">

						<?php the_content(); ?>
						
						<?php the_excerpt(); ?>
						<!--<a href="#" class="more">more</a>-->
				</div>
			</article>
            <!--記事終わり-->
		<?php endwhile; ?>
		<?php else: //記事がなかったら ?>	
        	<article>
            	<p>記事が見つかりませんでした！</p>
            </article>
		<?php endif; ?>

	</div><!-- content-->
	
</main><!-- #main_content -->	
	
<?php get_footer(); ?>