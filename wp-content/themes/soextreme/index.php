<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php bloginfo( 'wpurl' ) ?>">
					<img src="<?php echo get_template_directory_uri();?>/logo.svg" alt="" width="200" title="<?php bloginfo( 'name' ) ?>">
				</a>
			</div>
			<div class="col-sm-9">
				<?php bloginfo( 'description' ) ?>
			</div>
		</div>
	</div>

	<?php wp_footer();?>
</body>
</html>