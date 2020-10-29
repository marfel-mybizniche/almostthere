<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.ico"> -->
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>


<header id="header" data-sticky-container="" data-toggler=".show-menu" class="sticky-container" data-n="qgzebj-n">
    <div class="hsnav-s11 sticky is-anchored is-at-top" data-sticky="" data-options="marginTop:0" data-resize="s9kyth-sticky" data-mutate="s9kyth-sticky" data-n="vm0tew-n" data-events="mutate" style="max-width: 1903px; margin-top: 0px; bottom: auto; top: 0px;">
        <div class="navbar clearfix">
            <div class="grid-container">
                <a class="navlogo" href="<?php echo home_url(); ?>" title="<?php echo get_bloginfo("name"); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php echo get_bloginfo('name'); ?>" />
                </a>

                <span class="navicon hide-for-large" data-toggle="header" aria-expanded="true" aria-controls="header">mobile menu</span>
                    
                <?php wp_nav_menu(array('theme_location' => 'header-menu',
                                'items_wrap'     => '<nav class="navleft navmenu show-for-large" id="mobile_menu_nav"><ul class="menu dropdown expanded" data-dropdown-menu="" role="menubar" data-n="q00ipd-n">%3$s</ul></nav>')); ?>

                <?php wp_nav_menu(array('theme_location' => 'right-header-menu',
                                'items_wrap'     => '<nav class="navright navmenu show-for-large" id="mobile_menu_nav"><ul class="menu dropdown align-right expanded" data-dropdown-menu="" role="menubar" data-n="ihg4yr-n">%3$s</ul></nav>')); ?>
            </div>



            <?php wp_nav_menu(array('theme_location' => 'mobile-menu',
                                'items_wrap'     => '<nav class="mobmenu" id="mobile_menu_nav"><ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu="" data-submenu-toggle="true" role="tree" aria-multiselectable="false" data-n="glesy3-n">%3$s</ul></nav>')); ?>
            
        </div>
    </div>            
</header>