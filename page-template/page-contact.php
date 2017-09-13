<div id="content">
    <div id="inner-content" class="row">
	   <div class="large-10 medium-10 small-centered" role="main">	
            <?php get_template_part( 'parts/slider', 'homepage' ); ?>
              <div class="row">
                <div class="small-12 medium-8 large-8 columns">
                    <?php echo do_shortcode( '[contact-form-7 id="67" title="Contact form 1"]' ); ?> 
                </div>
                <div class="small-12 medium-4 large-4 columns">
                    <h4><?php the_title(); ?></h4>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">                    
                        <section class="entry-content" itemprop="articleBody">
                            <?php the_content(); ?>
                        </section> <!-- end article section -->    
                    </article> <!-- end article -->	
                    <?php endwhile; endif; ?>   
                </div>
            </div>	
	</div> <!-- end #main -->
		</div> <!-- end #inner-content -->
</div> <!-- end #content -->
