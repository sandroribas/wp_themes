<?php $my_query = new WP_Query('post_type=sliders&p=sliders'); while ($my_query->have_posts()) : $my_query->the_post(); 
$personalUrl = get_post_meta($post->ID, 'slide-url', true);//pegando campo personalizado com a URL?>
<div class="slide">
    <?php  echo '<div><a href="'.$personalUrl.'">';  ?>
	<?php the_post_thumbnail('post-thumbnails'); ?>
    <?php echo '</a></div>';  ?>
    <div class="caption" style="bottom:0">
   <?php  echo '<div><a href="'.$personalUrl.'">';  ?>
    	
        <h1><?php the_title(); ?></h1>
		<p><?php the_excerpt(); ?></p>
        <?php echo '</a></div>';  ?>
    </div><!--caption-->
</div><!--slide-->




<?php endwhile; ?>
