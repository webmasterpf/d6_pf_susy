<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM LYCEE________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
     
        <div id="col1" class="col1_layout_5_3_4 page-lycee">
        
            <?php if ($node->field_lycee_logocoordtxt[0]['view']): ?>
      <span class="lycee-coordlogo">
                 <?php  print $node->field_lycee_logocoordtxt[0]['view'] ?>
      </span>
             <?php endif; ?>    
             
       <br clear="all"/>      
    <?php if ($node->field_lycee_form[0]['view']): ?>
       <span class="lycee-formation">
                 <?php  print $node->field_lycee_form[0]['view'] ?>
      </span>
             <?php endif; ?>
        
            <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  $theme_path = drupal_get_path('theme', 'd6_pf_susy');
include($theme_path .'/includes/inc_region_col_1.php');
?>
             
        </div><!--___FIN COL1___ -->
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="col1" class="col2_layout_5_3_4 page-lycee">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                
                <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
                
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
           
         <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  $theme_path = drupal_get_path('theme', 'd6_pf_susy');
include($theme_path .'/includes/inc_region_col_2.php');
?>
              
          
                <!-- retour haut selon resolution de l'ecran -->
                <a href="#header" id="retour_haut">Haut de page</a>
            </div><!--___/content___ -->
        </div> <!--___FIN COL2___ -->
 <!--______________COLONNE 3________________ -->
 <div id="col3" class="col3_layout_5_3_4 page-lycee">
     
     <?php if ($node->field_diapo_lycee_type[0]['view']): ?>
      <span class="diapo-lycee">
                 <?php  print $node->field_diapo_lycee_type[0]['view'] ?>
      </span>
             <?php endif; ?>      
             
        
             
      <?php if ($node->field_lycee_gmap[0]['view']): ?>
      <span class="gmap-lycee">
                 <?php  print $node->field_lycee_gmap[0]['view'] ?>
      </span>
             <?php endif; ?>
     
     
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