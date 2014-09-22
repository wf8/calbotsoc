			<footer class="footer">

      			<hr>
	
      			<div class="row-fluid">
        
        			<div class="span5">
						<img style="float: left; padding: 0px 10px 0px 0px;" src="<?php echo get_template_directory_uri(); ?>/library/img/MadronoImage.jpg" width="50">
						<p><strong>California Botanical Society</strong><br>
						c/o Jepson Herbarium<br>
						1001 Valley Life Sciences Building<br>
						Berkeley, California 94720-2465<br>
						</p>
					</div>
					
					<div class="span7 fb-footer">
	  					<a href="http://www.facebook.com/calbotsociety/">
	  					<img src="<?php echo get_template_directory_uri(); ?>/library/img/fb_icon_325x325.png" width="30">
	  					<strong>CBS on Facebook!</strong></a>
						<br><br><br>
                                                <?php 
							$page_name = $post->post_name;
							if ($page_name == "about" || $page_name == "events" || $page_name == "membership")
								$photographer = "Tom Schweich";
							else if ($page_name == "madrono")
								$photographer = "Scott Simono";
							else if ($page_name == "links" || $page_name == "grants" || $page_name == "grants-spanish" || $page_name == "grants-english" || $page_name == "grad-students")
								$photographer = "Debra Valov";
							else
								$photographer = "Ana Penny";
						?>
						Banner photo: <?php echo $photographer; ?>

					</div>
					
      			</div>

			</footer>

		</div><!-- /container -->

		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery-1.11.0.min.js"></script>
    	<script src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap.min.js"></script>

		<?php wp_footer(); ?> 

	</body>

</html>
