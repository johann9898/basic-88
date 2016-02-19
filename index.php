<?php include 'include/intro.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Welcome <?php include 'include/title.php';?></title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Layout</a></h1>
      </div>
    <nav>
      <?php include 'include/menu.php';?>

    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="pure-u-1 pure-u-sm-24-24 pure-u-md-24-24 pure-u-lg-24-24">
    <!-- Slider -->
    <section id = "fade" ><img src= "<?php echo $input[array_rand($input)]; ?>" alt=""></section>
    <!-- main content -->
    
    <!-- / content body -->
  </div>
</div>

</div>
<footer  id="copyright" class="clear">
  <p>&copy; <?php include 'include/footer.php'?>  Jóhann Rúnarsson</p>
</footer>
</body>
</html>
