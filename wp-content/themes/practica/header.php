<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php wp_head() ?>
	
</head>
<body>
	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-4">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="logo">
				</div>
				<div class="col-8">
					<nav>
						<?php 
							wp_nav_menu(array(	'theme_location' => 'top_menu',
												'menu_class' => 'menu-principal',
												'container_class' =>'container-menu')); 
						 ?>
					</nav>
				</div>

			</div>

		</div>
			
	</header>


