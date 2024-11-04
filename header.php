<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part('head'); ?>

<body <?php body_class(); ?> id="fivehundred">
	
	<div id="wrapper" class="hfeed">
		<header id="header" class="<?php echo apply_filters('fh_header_class', ''); ?>">
			<nav>
                Custom navigation here!
            </nav>
		</header>
	<?php if (isset($post) && $post->post_type == 'post' && is_home()) { ?>
		<div id="containerwrapper" class="<?php echo (isset($post) ? $post->post_type : ''); ?> containerwrapper-home">
	<?php } else { ?>
	<div id="containerwrapper" class="<?php echo (isset($post) ? $post->post_type : ''); ?> containerwrapper">
	<?php } ?>