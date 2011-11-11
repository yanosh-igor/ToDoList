<!DOCTYPE html>
<!--[if IE 7 ]>   <html lang="en" class="ie7 lte8"> <![endif]--> 
<!--[if IE 8 ]>   <html lang="en" class="ie8 lte8"> <![endif]--> 
<!--[if IE 9 ]>   <html lang="en" class="ie9"> <![endif]--> 
<!--[if gt IE 9]> <html lang="en"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<!--[if lt IE 9 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

<!-- iPad Settings -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0">
<!-- iPad End -->

<title><?php echo $title_for_layout; ?></title>

<link rel="shortcut icon" href="favicon.html">

<!-- iOS ICONS -->
<link rel="apple-touch-icon" href="touch-icon-iphone.html" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.html" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-iphone4.html" />
<link rel="apple-touch-startup-image" href="touch-startup-image.html">
<!-- iOS ICONS END -->

<!-- STYLESHEETS -->
<?php echo $this->Html->css(array('reset', 'grids', 'style' ,'jquery.uniform','themes/gray/style')); ?>


<!-- jQplot CSS -->
<link rel="stylesheet" media="screen" href="lib/jqplot/jquery.jqplot.min.css" />
<!-- jQplot CSS END -->

<!--[if lt IE 9]>
<link rel="stylesheet" media="screen" href="css/ie.css" />
<![endif]-->

<style type = "text/css">
    #loading-container {position: absolute; top:50%; left:50%;}
    #loading-content {width:800px; text-align:center; margin-left: -400px; height:50px; margin-top:-25px; line-height: 50px;}
    #loading-content {font-family: "Helvetica", "Arial", sans-serif; font-size: 18px; color: black; text-shadow: 0px 1px 0px white; }
    #loading-graphic {margin-right: 0.2em; margin-bottom:-2px;}
    #loading {background-color: #eeeeee; height:100%; width:100%; overflow:hidden; position: absolute; left: 0; top: 0; z-index: 99999;}
</style>

<!-- STYLESHEETS END -->

<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<script type="text/javascript" src="js/selectivizr.js"></script>
<![endif]-->

</head>
<body style="overflow:hidden;">
    <div id="loading"> 

     <script type = "text/javascript"> 
            document.write("<div id='loading-container'><p id='loading-content'>" +
                         "<img id='loading-graphic' width='16' height='16'    src='/todolist/img/ajax-loader-big-000000.gif' /> " +
                           "Loading...</p></div>");
        </script>

</div> 
    <div id="wrapper">
        <header>
            <h1><?php echo $this->Html->link('ToDoList Admin', '/');?></h1>
           
            <nav>
				<ul id="main-navigation" class="clearfix"> 
					
					
						
                    <li class="fr dropdown"> 
                        <a href="#" class="with-profile-image"><span><img src="/todolist/img/profile-image.png" /></span>Administrator</a> 
                        <ul> 
                            <li><a href="#">Settings</a></li> 
                            <li><a href="#">Users</a></li> 
                            <li><a href="#">Signout</a></li> 
                        </ul>
                    </li> 
				</ul> 
            </nav>
        </header>
        
        <section>
            <!-- Sidebar -->

            <aside>
                <nav>
                    <ul>
                        <li class="current"><a href="/todolist">Dashboard</a></li>
                        <li><?php echo $this->Html->link('Projects', array('controller' => 'projects','action' => 'index'));?></li>
                        <li><a href="forms.html">Forms</a></li>
                        <li><a href="wizard.html">Wizard</a></li>
                        <li><a href="tables.html">Tables</a></li>
                    </ul>
                </nav>
                
            </aside>

            <!-- Sidebar End -->

            <section>
                <header class="container_12 clearfix">
                    <div class="grid_12">
                        <h1>Dashboard</h1>
                    </div>
                </header>
                
                 
                 
                <section class="container_12 clearfix">
                    <section class="grid_12"> 
                        <div class="message info">
                            <h3>Quick Help - Dashboard</h3> 
                            <p> 
                                Lorem ipsum dolor sit amet
                            </p> 
                            <ol> 
                                <li>Lorem ipsum</li> 
                                <li>dolor</li> 
                                <li>sit amet</li> 
                            </ol>
                        </div>
                    </section> 
                
 
                      <?php 
                      echo $this->Html->meta('icon');
                      echo $content_for_layout; ?>
               </section>
                <footer class="container_12 clearfix">
                    <div class="grid_12">
                        Copyright &copy; 2011.
                    </div>
                </footer>
            </section>

            <!-- Main Section End -->
        </section> 
    </div>
 <?php 
echo $this->Html->script(array('jquery.js', 'jquery.tools.min.js', 'jquery.uniform.min.js', 'global.js'));

?>
   <!-- <script type="text/javascript" src="jquery.js"></script>-->
    <!-- MAIN JAVASCRIPTS -->
   
    <script>window.jQuery || document.write("<script src='/todolist/js/jquery.min.js'>\x3C/script>")</script>
    
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/PIE.js"></script>
    <script type="text/javascript" src="js/ie.js"></script>
    <![endif]--

    <script type="text/javascript" src="/todolist/js/global.js"></script>
    <!-- MAIN JAVASCRIPTS END -->
<?php 
//echo $this->Html->script('global.js');

?>
    <!-- LOADING SCRIPT -->
    <script>
    $(window).load(function(){
        $("#loading").fadeOut(function(){
            $(this).remove();
            $('body').removeAttr('style');
        });
    });
    </script>
    <!-- LOADING SCRIPT -->
    
    <!-- jQplot SETUP -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/jqplot/excanvas.js"></script>
    <![endif]-->

   
   
  
</body>

</html>
