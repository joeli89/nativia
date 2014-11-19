<?php 

$page = "index";
$pageTitle = "Home";
include('inc/header.php'); 

?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/slider/bnr1.jpg" alt="...">
      <div class="carousel-caption">
        <div class="row carousel-caption-text">
          <div class="col-md-8 col-md-offset-4">
            <h2>Live a healthier and happier life with all 100% pure products for weight loss and daily vitality.</h2>
          </div>
        </div>
        <div class="row carousel-caption-btn">
          <div class="col-md-12">
            <button class="btn btn-default"><a href="products.php">PRODUCTS</a></button>
          </div>
        </div>

      </div>
    </div>
    <div class="item">
      <img src="img/slider/bnr2.jpg" alt="...">
      <div class="carousel-caption">
        <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h2>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<div id="main">
  <div class="container">

    <section>

      <div class="row">
        <div class="col-sm-6 col-md-6 effects clearfix" id="effect-1">
          <div class="thumbnail img">
            <a href=""><img src="img/health_benefits.png" alt="..."></a>
            <div class="overlay caption text-center">
              <a href="#" class="expand">
                <h3>Health Benefits</h3>
              </a>
              <!-- <a class="close-overlay hidden">x</a> -->
            </div>
          </div>
          <div class="caption text-center">
              <h5>Health Benefits</h5>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 effects clearfix" id="effect-1">
          <div class="thumbnail img">
            <a href=""><img src="img/superfoods.png" alt="..."></a>
            <div class="overlay caption text-center">
              <a href="#" class="expand">
                <h3>What are superfoods?</h3>
              </a>
              <!-- <a class="close-overlay hidden">x</a> -->
            </div>
          </div>
          <div class="caption text-center">
              <h5>What are superfoods?</h5>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 effects clearfix" id="effect-1">
          <div class="thumbnail img">
            <a href=""><img src="img/superfoods_recipes.png" alt="..."></a>
            <div class="overlay caption text-center">
              <a href="recipes.php" class="expand">
                <h3>Superfoods Recipes</h3>
              </a>
              <!-- <a class="close-overlay hidden">x</a> -->
            </div>
          </div>
          <div class="caption text-center">
              <h5>Superfoods Recipes</h5>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 effects clearfix" id="effect-1">
          <div class="thumbnail img">
            <a href=""><img src="img/superfoods_products.png" alt="..."></a>
            <div class="overlay caption text-center">
              <a href="#" class="expand">
                <h3>Superfoods Products</h3>
              </a>
              <!-- <a class="close-overlay hidden">x</a> -->
            </div>
          </div>
          <div class="caption text-center">
              <h5>Superfoods Products</h5>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 effects clearfix" id="effect-1">
          <div class="thumbnail img">
            <a href=""><img src="img/slider/bnr2.jpg" alt="..."></a>
            <div class="overlay caption text-center">
              <a href="#" class="expand">
                <h3>Natural Weight Loss Products</h3>
              </a>
              <!-- <a class="close-overlay hidden">x</a> -->
            </div>
          </div>
          <div class="caption text-center">
              <h5>Natural Weight Loss Products</h5>
            </div>
        </div>

      </div>

    </section>

  </div>
</div>






<?php include('inc/footer.php'); ?>