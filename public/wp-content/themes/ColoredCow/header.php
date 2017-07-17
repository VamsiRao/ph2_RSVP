<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title><?php echo bloginfo('name'); ?></title>
    <?php wp_head(); ?>

	<nav class=" navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">				
		<button class="navbar-toggler navbar-toggler-right justify-content-end" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<?php $img_url=get_template_directory_uri().'/dist/img/logo.png'; ?>
			<img src="<?= esc_url($img_url) ?>"  class="d-inline-block align-top" alt="">
		</a>
		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a role="button" class="btn btn-outline-secondary font-oswald"  href="<?=admin_url()?>" >Admin Login
						<span class="sr-only">(current)</span>
					</a>
				</li>
			</ul>
		</div>
	</nav>

</head>

<body>
    