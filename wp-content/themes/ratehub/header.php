<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?php wp_title();?></title>
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/menu.css" rel="stylesheet"/>
    <link href="<?php echo get_stylesheet_directory_uri();?>/css/customer.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <?php wp_head();?>
  </head>
  <body>
    <div class="container">
    
        <div class="topheader">
            <div class="row" style="padding-top: 10px;">
              <div class="col-md-12">
                <a href="<?php echo get_home_url();?>"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo-line-large.png"  class="img-responsive" width="252" height="70" /></a>
              </div>
            </div>
    
            <div class="row" style="padding-bottom: 10px;padding-top: 10px;">
              <div class="col-md-2">
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/facebook-logo.png" width="32" height="32"/></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/twitter-logo.png" width="32" height="32" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/linkedin-logo.png" width="32" height="32" /></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri();?>/images/plus-logo.png" width="32" height="32" /></a>
              </div>
              <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/phone.png"   />
              </div>
              <div class="col-md-4 text-right">
                    <a href="#" >frace</a>
              </div>
            </div>
        </div>
        
        <!---menu Mobile---!>
        <div class="row visible-xs">
            <div class="col-md-12">
        <select id="menumobile" class="combobox input-large form-control">
                    <?php
                    $menu_name = 'menu-header-left';
                    $count=0;
                    if(($locations=get_nav_menu_locations())&&isset( $locations[ $menu_name ] ) ) {
                        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                        
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        
                                     
                        $menu_list = '';
                        foreach ( (array) $menu_items as $key => $menu_item ) {
                            if($menu_item->menu_item_parent==0&&$count>0){
                               
                                $count=0;
                                foreach ( (array) $menu_items as $key => $menu_item_p ) {
                                    if($menu_item_p->menu_item_parent==$menu_item->ID){
                                      $count=1;
                                    }
                                }
                                
                                $menu_list .= '<option value="'.$menu_item->url.'">'.$menu_item->title.'</option>';
                                    if($count==1){
                                                foreach ( (array) $menu_items as $key => $menu_item_p ) {
                                                    if($menu_item_p->menu_item_parent==$menu_item->ID){
                                                        
                                                        $count2=0;
                                                        foreach ( (array) $menu_items as $key => $menu_item_p2){
                                                        if($menu_item_p2->menu_item_parent==$menu_item_p->ID){
                                                            $count2=1;
                                                        }
                                                        }
                                                        
                                                       $menu_list.= '<option value="' .$menu_item_p->url. '">-'.$menu_item_p->title.'</option>';
                                                        if($count2==1){
                                                            foreach ( (array) $menu_items as $key => $menu_item_p2){
                                                                if($menu_item_p2->menu_item_parent==$menu_item_p->ID){
                                                                    $menu_list .= '<option value="'.$menu_item_p2->url.'">--'.$menu_item_p2->title.'</option>';  
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                    }
                            }
                            $count++;
                        }

                    
                     }
                     echo $menu_list;
                    ?>
        </select>
        
        <script type="text/javascript">
          $(document).ready(function(){
            $('#menumobile').change(function() {
                var txt=$('#menumobile').val();
                    window.location.replace(txt);
            });
          });
        </script>
        </div>
        </div>
        
        <!----------MENU HEADER---------------!>
        <div class="row hidden-xs" style="padding: 0px;">
            <div class="col-md-8" style="padding: 0px;;padding-right: 2px;">
                <nav class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <?php
                    $menu_name = 'menu-header-left';
                    if(($locations=get_nav_menu_locations())&&isset( $locations[ $menu_name ] ) ) {
                        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                        
                        $menu_items = wp_get_nav_menu_items($menu->term_id);
                        
                                     
                        $menu_list = '<ul class="nav navbar-nav navleft">';
                        foreach ( (array) $menu_items as $key => $menu_item ) {
                            if($menu_item->menu_item_parent==0){
                               
                                $count=0;
                                foreach ( (array) $menu_items as $key => $menu_item_p ) {
                                    if($menu_item_p->menu_item_parent==$menu_item->ID){
                                      $count=1;
                                    }
                                }
                                
                                $menu_list .= '<li class="dropdown '.$menu_item->classes[0].'"><a data-toggle="dropdown" class="btn" data-target="#"  title="'.$menu_item->title.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
                                    if($count==1){
                                        $menu_list.='<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
                                                foreach ( (array) $menu_items as $key => $menu_item_p ) {
                                                    if($menu_item_p->menu_item_parent==$menu_item->ID){
                                                        
                                                        $count2=0;
                                                        foreach ( (array) $menu_items as $key => $menu_item_p2){
                                                        if($menu_item_p2->menu_item_parent==$menu_item_p->ID){
                                                            $count2=1;
                                                        }
                                                        }
                                                        
                                                       $menu_list.= '<li class="dropdown-submenu"><a tabindex="-1" href="' .$menu_item_p->url. '">'.$menu_item_p->title.'</a>';
                                                       
                                                        if($count2==1){
                                                            $menu_list.='<ul class="dropdown-menu">';
                                                            foreach ( (array) $menu_items as $key => $menu_item_p2){
                                                                if($menu_item_p2->menu_item_parent==$menu_item_p->ID){
                                                                    $menu_list .= '<li ><a tabindex="-1" href="'.$menu_item_p2->url.'">'.$menu_item_p2->title.'</a></li>';  
                                                                }
                                                            }
                                                            $menu_list.='</ul>';
                                                        }
                                                       $menu_list.='</li>';
                                                    }
                                                }
                                        $menu_list.='</ul>';
                                    }
                                $menu_list.='</li>';
                            }
                        }
                                        
                        $menu_list .= '</ul>';
                    
                     }
                     echo $menu_list;
                    ?>
                  </div>
                </nav>
            </div>
            
            <div class="col-md-4" style="padding-left: 2px;">
                <nav class="navbar navbar-inverse" role="navigation">
                  <div class="container-fluid">      
                    <?php
                    $menu_name = 'menu-header-right';
                    if(($locations=get_nav_menu_locations())&&isset( $locations[ $menu_name ] ) ) {
                        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );           
                        $menu_items = wp_get_nav_menu_items($menu->term_id);         
                        $menu_list = '<ul class="nav navbar-nav navleft">';
                        foreach ( (array) $menu_items as $key => $menu_item ) {
                            if($menu_item->menu_item_parent==0){
                               
                                $count=0;
                                foreach ( (array) $menu_items as $key => $menu_item_p ) {
                                    if($menu_item_p->menu_item_parent==$menu_item->ID){
                                      $count=1;
                                    }
                                }
                                
                                $menu_list .= '<li class="dropdown" style="border:none;border-right: 1px solid #1c4964;"><a data-toggle="dropdown" class="btn" data-target="#"  title="'.$menu_item->title.'" href="'.$menu_item->url.'">'.$menu_item->title.'</a>';
                                    if($count==1){
                                        $menu_list.='<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">';
                                                foreach ( (array) $menu_items as $key => $menu_item_p ) {
                                                    if($menu_item_p->menu_item_parent==$menu_item->ID){
                                                        
                                                        $count2=0;
                                                        foreach ( (array) $menu_items as $key => $menu_item_p2){
                                                        if($menu_item_p2->menu_item_parent==$menu_item_p->ID){
                                                            $count2=1;
                                                        }
                                                        }
                                                        
                                                       $menu_list.= '<li class="dropdown-submenu"><a tabindex="-1" href="' .$menu_item_p->url. '">'.$menu_item_p->title.'</a>';
                                                       
                                                        if($count2==1){
                                                            $menu_list.='<ul class="dropdown-menu">';
                                                            foreach ( (array) $menu_items as $key => $menu_item_p2){
                                                                if($menu_item_p2->menu_item_parent==$menu_item_p->ID){
                                                                    $menu_list .= '<li ><a tabindex="-1" href="'.$menu_item_p2->url.'">'.$menu_item_p2->title.'</a></li>';  
                                                                }
                                                            }
                                                            $menu_list.='</ul>';
                                                        }
                                                       $menu_list.='</li>';
                                                    }
                                                }
                                        $menu_list.='</ul>';
                                    }
                                $menu_list.='</li>';
                            }
                        }            
                        $menu_list .= '</ul>';
                     }
                     echo $menu_list;
                    ?>
                  </div>
                </nav>
            </div>
        </div>
        <!----------END MENU---------------!>