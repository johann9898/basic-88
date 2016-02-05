<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Tímaverkefni 1</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Layout</a></h1>
      </div>
    <nav>
      <?php include 'php/menu.php';?>

    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider"><a href="#"><?php echo '<img src="images/demo/960x360.gif"  alt="">' ?> </a></section>
    <!-- main content -->
    <div id="homepage">
      <!-- Services -->
      <section id="services" class="clear">
        <article class="one_third">
          <figure><?php echo '<img src="images/demo/290x180.gif" width="290" height="180" alt="">' ?>
           
          </figure>
        </article>
        <article class="one_third">
          <figure><?php echo '<img src="images/demo/290x180.gif" width="290" height="180" alt="">' ?>
            
          </figure>
        </article>
        <article class="one_third lastbox">
          <figure><?php echo '<img src="images/demo/290x180.gif" width="290" height="180" alt="">' ?>
           
          </figure>
        </article>
      </section>
      <!-- / Services -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- Introduction -->
      
      <!-- / Introduction -->
    </div>
    <!-- / content body -->
  </div>
</div>

</div>

</body>
</html>
