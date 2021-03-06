<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM ASSO________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
     
        <div id="col1" class="col1_layout_3_8_3 page-association">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
        
            <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  $theme_path = drupal_get_path('theme', 'd6_pf_susy');
include($theme_path .'/includes/inc_region_col_1.php');
?>
             
        </div><!--___FIN COL1___ -->
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="col2" class="col2_layout_3_8_3 page-association">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            
         <?php
                //$theme_path = drupal_get_path('theme', 'NOM_THEME');
                $theme_path = drupal_get_path('theme', 'd6_pf_susy');
                include($theme_path . '/includes/inc_region_col_2.php');
                ?>
              
            <!--***********!!!!!!  EXEMPLE DE CHAMP CCK INCLUS AVEC CONDITION !!!!!!!!************ -->
            <?php if ($node->nom_du_champ[0]['view']): ?>
            <div id="nom-css">
                    <?php  print $node->nom_du_champ[0]['view']  ?>
            </div>
            <?php endif;?>
            
            <!-- retour haut selon resolution de l'ecran -->
          <a href="#header" id="retour_haut">Haut de page</a>
          </div><!--___/content___ -->
        </div> <!--___FIN COL2___ -->
 <!--______________COLONNE 3________________ -->
 <div id="col3" class="col3_layout_3_8_3 page-association">
     
     <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  $theme_path = drupal_get_path('theme', 'd6_pf_susy');
include($theme_path .'/includes/inc_region_col_3.php');
?>
 </div><!--___FIN COL3___ -->

        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->