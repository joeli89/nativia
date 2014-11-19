<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nativia</title>

    <!-- Fonts & Icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/normalize.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap-magnify.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/overwrite.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class='<?php if($page != "index") {echo "body-padding-top";} ?>'>


  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
          <div class="big">
            <img alt="Brand" src="img/logo/logo-text.png">
          </div>
          <div class="small">
            <img alt="Brand" src="img/logo/logo-text.png">
          </div>
        </a>
      </div>

      
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbarCollapse">
       
<!--         <ul class="nav navbar-nav navbar-left">
          <li><a href="#"><span><i class="ion-scissors"></i> Discount Coupons</span></li>
        </ul> -->
        <ul class="nav navbar-nav navbar-right">
          <li class="<?php if($page == "index"){echo "active";} ?>"><a href="index.php">HOME</a></li>
          <li class="<?php if($page == "recipes"){echo "active";} ?>"><a href="recipes.php">RECIPES</a></li>
          <li class="<?php if($page == "products"){echo "active";} ?>"><a href="products.php">PRODUCTS</a></li>
          <li class="<?php if($page == "contact"){echo "active";} ?>"><a href="contact.php">CONTACT</a></li>
          <li><a href="" data-toggle="modal" data-target="#searchBar"><i class="ion-ios7-search"></i></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div> <!-- end nav container -->
  </nav>

<!-- Modal -->
<div class="modal fade" id="searchBar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-body text-center">
        <form>
          <div class="row">
            <div class="col-xs-8">
              <input type="search" placeholder="search" required="" class="subscribe-input">
            </div>
            <div class="col-xs-4">
              <input class="submit-btn" type="submit" value="Go">
            </div>
          </div> 
        </form>
      </div>
    </div>
  </div>
</div>

  <div class='head <?php if($page == "index"){ echo "hide";} ?>'>
    <img src='<?php echo $headImage; ?>' src="">
  </div>
