<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('&laquo;', true, 'right'); bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="site-container">
        <div class="content-left">
            <div class="content-left-interior">
                <header>
                    <ul>
                        <li class="header-title-inset"><a href="<?php echo home_url(); ?>/">Real</a></li>
                        <li><a href="<?php echo home_url(); ?>/">Men</a></li>
                        <li class="header-title-inset"><a href="<?php echo home_url(); ?>/">Wear</a></li>
                        <li><a href="<?php echo home_url(); ?>/">Beards</a></li>
                    </ul>
                </header>
                <ul class="social">
                    <li><a class="twitter social-widget" title="Follow @bhalash on Twitter" href="http://www.twitter.com/bhalash"></a></li>
                    <li><a class="facebook social-widget" title="Contact Mark on Facebook" href="http://www.facebook.com/bhalash"></a></li>
                    <li><a class="instagram social-widget" title="Follow @bhalash on Instagram" href="http://www.instagram.com/bhalash"></a></li>
                    <li><a class="github social-widget" title="Friend Bhalash on GitHub" href="http://www.github.com/bhalash"></a></li>
                </ul>
                <form action="<?php echo get_site_url(); ?>" class="sidebar-search" method="get">
                    <p>
                        <input class="search-input" id="s" name="s" placeholder="Search RMWB" tabindex="1" type="text" />
                        <input class="search-submit" type="submit" value="" />
                    </p>
                </form>
                <?php get_sidebar(); ?>
            </div>
        </div> 
        <div class="content-right">