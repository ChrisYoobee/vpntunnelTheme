	</div>
	<footer>
		<div class="footer">
			<div class="footer-text">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<?php
	                            $parms = array(
	                            'type'=>'post',
	                            'category_name'=>'footer-text-1'
	                        );
	                        $vpn = new WP_Query($parms);
	                     ?>
	                     <?php if($vpn->have_posts()): ?>
	                         <?php while($vpn->have_posts()): $vpn->the_post();?>
	                             <h3><?php the_title(); ?></h3>
	                             <div><?php the_content(); ?></div>
	                         <?php endwhile; ?>
	                     <?php endif; ?>
					</div>
					<div class="col-md-4 col-xs-6">
						<?php
	                            $parms = array(
	                            'type'=>'post',
	                            'category_name'=>'footer-text-2'
	                        );
	                        $vpn = new WP_Query($parms);
	                     ?>
	                     <?php if($vpn->have_posts()): ?>
	                         <?php while($vpn->have_posts()): $vpn->the_post();?>
	                             <h3><?php the_title(); ?></h3>
	                             <div><?php the_content(); ?></div>
	                         <?php endwhile; ?>
	                     <?php endif; ?>
					</div>
					<div class="col-md-4 col-xs-6">
						<?php
	                            $parms = array(
	                            'type'=>'post',
	                            'category_name'=>'footer-text-3'
	                        );
	                        $vpn = new WP_Query($parms);
	                     ?>
	                     <?php if($vpn->have_posts()): ?>
	                         <?php while($vpn->have_posts()): $vpn->the_post();?>
	                             <h3><?php the_title(); ?></h3>
	                             <div><?php the_content(); ?></div>
	                         <?php endwhile; ?>
	                     <?php endif; ?>
					</div>
				</div>
			</div>
			<div class="back-to-top">
				<a href="#top">	<h3>Back to top</h3></a>
			</div>
			<div class="footer-banner-text">
				<p><?php echo get_theme_mod('newTheme_footer_text'); ?></p>
			</div>
			<div class="footer-img">
				<img src=  "<?php echo get_template_directory_uri() . '/assets/footer-img.png' ?> " alt="footer image">
			</div>
		</div>
	</footer>


<?php wp_footer(); ?>
</body>
</html>
