<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
	<?php wp_nav_menu( array( 
		'theme_location' 	=> 'header-menu',
		'container_id'		=> 'navbarResponsive',
		'container_class' 	=> 'collapse navbar-collapse',
		'menu_class'     	=> 'navbar-nav ml-auto'
		)
	); ?>
<?php } ?>
