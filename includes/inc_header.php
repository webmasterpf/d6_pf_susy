<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">

  <head>
    <meta charset="utf-8">
    <title><?php print $head_title; ?></title>
    <!-- Meta RWD -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- stats-SEO -->
    <meta name="google-site-verification" content="" />
    <meta name="y_key" content=""/>
    <meta name="msvalidate.01" content="" />
    <?php print $head; ?>
    <?php print $styles; ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <?php print $scripts; ?>
    <script src="<?php print $base_path . path_to_theme() ?>/js/typos.js" type="text/javascript" charset="utf-8"></script>

    
 <?php
$theme_path = drupal_get_path('theme', 'd6_pf_susy');
include ($theme_path.'/js/google_font.php');
?>
        
  </head>

 <body class="<?php print $body_classes; ?>">

     <section class="conteneur">

    <!-- ______________________ HEADER _______________________ -->
    <header id="header">


        <div class="headHaut">

            <div class="logoHead">
                <?php if (!empty($logo)): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/></a>
                <?php endif; ?>
            </div>

            <div class="menuImg">
                <?php if (!empty($navStatic)): ?>
                    <?php print $navStatic; ?>
                <?php endif; ?>
            </div>

        </div><!-- /headHaut -->
        <div class="headBas">

            <?php if (!empty($site_slogan)): ?>
                <div class="site-slogan">
                    <?php print $site_slogan; ?>
                </div><!-- /site-slogan -->
            <?php endif; ?>


            <div class="headSearch">
                <?php if (!empty($search_box)): ?>
                    <?php print $search_box ?>
                <?php endif; ?>
            </div><!-- /recherche -->


         
        </div><!-- /headBas -->
        <nav class="menuHead">
            <?php if (!empty($menuDyn)): ?>
                <?php print $menuDyn; ?>
            <?php endif; ?>

        </nav><!-- /menuHead -->

    </header> <!-- /header -->
