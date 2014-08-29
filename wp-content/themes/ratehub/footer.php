        <div class="row widgetfooter">
            <div class="col-md-1">
            &nbsp;
            </div>
            <?php
            echo dynamic_sidebar( 'sidebar-footer' ) ;
            ?>                                    
            <div class="col-md-1">
            &nbsp;
            </div>
        </div>
        
        <div class="row inforfooter">
            <div class="col-md-12">
            
    <b>RateHub</b>
    1.800.679.9622
    103 Balliol Street, Toronto, ON M4S 1C2
    All content © RateHub, 2014
    <b>Français</b>

            </div>
        </div>
        
    </div>
    <script src="<?php echo get_stylesheet_directory_uri();?>/js/bootstrap.min.js"></script>
    <?php wp_footer();?>
    <script type="text/javascript">

        
        jQuery('ul.nav li.dropdown').hover(function() {
          jQuery(this).find('.multi-level').stop(true, true).delay(100).fadeIn();
        }, function() {
          jQuery(this).find('.multi-level').stop(true, true).delay(100).fadeOut();
        });     
        
        jQuery('ul.nav li.dropdown ul.multi-level').hover(function() {
          jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn();
        }, function() {
          jQuery(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut();
        });  
        
         jQuery('.bntslide').hover(function(){
             jQuery('.txtp').hide();
           var txtId=this.id;
             jQuery('#p'+txtId).show();
         });         
    </script>
  </body>
</html>