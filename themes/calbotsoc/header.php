<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Systematics, ecology, evolution, and natural history of the plants of California and adjacent western North America. Publisher of the journal Madroño.">
		<meta name="author" content="California Botanical Society">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>

		
		<link href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrap.min.css" rel="stylesheet">
    	<link href="<?php echo get_template_directory_uri(); ?>/library/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/library/css/calbotsoc.css" rel="stylesheet">

		<?php wp_head(); ?> 

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?>>

		<div class="container">

      				<div class="masthead">
        				<h2><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/library/img/MadronoImage.jpg" width="50">California Botanical Society</a></h2>
						
						<?php
							$page_name = $post->post_name;
							$banner_image = get_template_directory_uri() . "/library/img/banner-" . $page_name . ".jpg"; 
							
							if (!file_exists("./wp-content/themes/calbotsoc/library/img/banner-" . $page_name . ".jpg"))
								$banner_image = get_template_directory_uri() . "/library/img/banner-main.jpg";
						?>
						<div class="text-center">						
							<img class="img-rounded banner" src="<?php echo $banner_image; ?>">
						</div>

						<nav role="navigation">
						
						
							<div class="navbar">
          						<div class="navbar-inner">

               						<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  						<span class="icon-bar"></span>
	          							<span class="icon-bar"></span>
	          							<span class="icon-bar"></span>
               						</button>

            						<div class="nav-collapse collapse">
            						
              								<?php wp_nav_menu( array('container' => false, 'menu_class' => 'nav') ); ?>

	      								</ul>	
            						</div> <!-- /.nav-collapse -->
          						</div>
        					</div><!-- /.navbar -->
        					
        				</nav>
      				</div><!-- /.masthead -->
      				
			<br>
			<br>
