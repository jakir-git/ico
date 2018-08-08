<?php 
/*
*Template Name: 404 Page Template
*/
get_header('alternative');
$bg_img = get_theme_mod( '404_bg_img', get_parent_theme_file_uri( 'images/404.jpg' ) );
$error_img = get_theme_mod( '404_img', get_parent_theme_file_uri( 'images/404.png' ) );

$html = esc_html( '<a href="http://www.example.com/">A link</a>');

?>
<div class="text-center icocrypt-error-wrapper" style="background-image: url(<?php echo $bg_img; ?>)">
       <!--  <h1 class="error-title"><?php  echo esc_html(get_theme_mod( '404_title', esc_html__('Page not found', 'icocrypt'))); ?></h1> -->
        <div class="error-img">
        	<img src="<?php echo $error_img; ?>" alt="">
        </div>
        <p class="error-message"><?php  echo esc_html(get_theme_mod( '404_description', '' )); ?></p>
        <div class="error-button">
        	<p><?php echo __('Sorry, we cant find  the page you are looking for '.'</br>'.'
Click '.'<a href="'.home_url('/').'">here</a>'.' to come back to home page.', 'icocrypt'); ?></p>

    </div>
</div>
<?php get_footer('alternative'); ?>