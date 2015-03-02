<?php $theme_path = drupal_get_path('theme', 'd6_pf_susy'); include ($theme_path.'/includes/inc_header.php'); ?>

<div class="content-global">
<!-- ______________________ PAGE FRONT SITE PF _______________________ -->
 <!-- ______________________ CONTENU _______________________ -->
   
   

          <?php if ($content_top): ?>
            <div id="content-top">
              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
          <?php endif; ?>

          <?php if ($annonceImg): ?>
            <div id="content-areaHaut">
			
              <?php if ($annonceImg): ?>
                 <div id="annonceImg"><?php print $annonceImg; ?></div>
              <?php endif; ?>
              
            </div> <!-- /#content-areaHaut -->
          <?php endif; ?>

                 <?php if ($blocLycee): ?>
                 <div id="blocLycee"><?php print $blocLycee; ?></div>
              <?php endif; ?>
  
		  
	  
	  
	   <!-- ______________________ EDITO DROITE _______________________ -->
      
	  
	  <div id="contentAnim"> 		
        <?php if ($Anim): ?>
            <div id="textAnim"><?php print $Anim; ?></div><!-- /#textAnim -->
        <?php endif; ?>
		
      </div><!-- /#contentAnim -->
	  
   
	<br clear="all"/>
	<!-- ______________________ CONTENU BAS _______________________ -->
    <?php if ($content_bottom_home): ?>
    <div id="content-bottom-home">
      <?php print $content_bottom_home; ?>
         <?php //print $feed_icons; ?>
      </div> <!-- /content_bottom_home -->
       <?php endif; ?>
      
      
	<?php if ($content_bottom): ?>
            <div id="content-bottom">
              <?php print $content_bottom; ?>
             </div><!-- /#content-bottom -->
                <?php endif; ?>
        
	
	 
  
</div> <!-- /content-global -->
<?php $theme_path = drupal_get_path('theme', 'd6_pf_susy'); include ($theme_path.'/includes/inc_footer.php'); ?>
