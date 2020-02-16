<div class="entry-meta clear">

	<span class="entry-author"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?></a> <?php the_author_posts_link(); ?></span> 
	<span class="entry-date"> &#8212; <?php echo get_the_date(); ?></span>

	<span class="entry-category"> <?php esc_html_e('in', 'myshare-pro'); ?> <?php myshare_pro_first_category(); ?></span>

</div><!-- .entry-meta -->