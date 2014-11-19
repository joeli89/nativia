<?php 
$page = "recipes";
include('inc/header.php'); 
?>


<div class="container">

  <div class="row">
    <div class="col-md-8">

          <h3>Recipes</h3>
          <hr>
          <div class="row" id="program-filters">
            <div class="col-md-12">
              <button class="btn btn-default filter" data-filter="all">All</button>
              <button class="btn btn-default filter" data-filter=".salads">Salads</button>
              <button class="btn btn-default filter" data-filter=".snacks">Snacks</button>
              <button class="btn btn-default filter" data-filter=".smoothies">Smoothies</button>
              <button class="btn btn-default filter" data-filter=".meals">Meals</button>
            </div>
          </div>

        <div id="Container">

          <div class="row recipe-item mix meals">
              <div class="media col-xs-3">
                <a class="media-left media-middle" href="single.php">
                  <img src="img/recipes/smoothie1.jpg" alt="...">
                </a>
              </div>
              <div class="media-body col-xs-9">
                <h4 class="media-heading">smoothies Lorem</h4>
                <p class="recipe-info">
                  <i class="ion-person"></i> Name | 
                  <i class="ion-ios7-calendar-outline"></i> 1st Jan 2014 | 
                  <i class="ion-ios7-pricetags"></i> News, Featured | 
                  <i class="ion-ios7-chatboxes"></i> No Comments
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada 
                  erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, ....
                </p>
                <button class="btn btn-default"><a href="single.php">view</a></button>
              </div>
          <hr>
          </div>


          <div class="row recipe-item mix smoothies">
              <div class="media col-xs-3">
                <a class="media-left media-middle" href="single.php">
                  <img src="img/recipes/smoothie1.jpg" alt="...">
                </a>
              </div>
              <div class="media-body col-xs-9">
                <h4 class="media-heading">smoothies Lorem</h4>
                <p class="recipe-info">
                  <i class="ion-person"></i> Name | 
                  <i class="ion-ios7-calendar-outline"></i> 1st Jan 2014 | 
                  <i class="ion-ios7-pricetags"></i> News, Featured | 
                  <i class="ion-ios7-chatboxes"></i> No Comments
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada 
                erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, ....
                </p>
                <button class="btn btn-default"><a href="single.php">view</a></button>
              </div>
          <hr>
          </div>

          <div class="row recipe-item mix salads snacks">
              <div class="media col-xs-3">
                <a class="media-left media-middle" href="single.php">
                  <img src="img/recipes/smoothie1.jpg" alt="...">
                </a>
              </div>
              <div class="media-body col-xs-9">
                <h4 class="media-heading">smoothies Lorem</h4>
                <p class="recipe-info">
                  <i class="ion-person"></i> Name | 
                  <i class="ion-ios7-calendar-outline"></i> 1st Jan 2014 | 
                  <i class="ion-ios7-pricetags"></i> News, Featured | 
                  <i class="ion-ios7-chatboxes"></i> No Comments
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada 
                erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, ....
                </p>
                <button class="btn btn-default"><a href="single.php">view</a></button>
              </div>
          <hr>
          </div>


          <div class="row recipe-item mix smoothie snacks">
              <div class="media col-xs-3">
                <a class="media-left media-middle" href="single.php">
                  <img src="img/recipes/smoothie1.jpg" alt="...">
                </a>
              </div>
              <div class="media-body col-xs-9">
                <h4 class="media-heading">smoothies Lorem</h4>
                <p class="recipe-info">
                  <i class="ion-person"></i> Name | 
                  <i class="ion-ios7-calendar-outline"></i> 1st Jan 2014 | 
                  <i class="ion-ios7-pricetags"></i> News, Featured | 
                  <i class="ion-ios7-chatboxes"></i> No Comments
                </p>
                <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada 
                erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, ....
                </p>
                <button class="btn btn-default"><a href="single.php">view</a></button>
              </div>
          <hr>
          </div>

        </div> <!-- end of id Container -->

        <nav class="text-center">
              <ul class="pagination">
                <li><a href="single.php">&laquo;</a></li>
                <li class="active"><a href="single.php">1</a></li>
                <li><a href="single.php">2</a></li>
                <li><a href="single.php">3</a></li>
                <li><a href="single.php">&raquo;</a></li>
              </ul>
            </nav>
    </div> <!-- end col-md-8 -->

    <div class="col-md-4">

      <div id="vegan" class="text-center row widget">
        <div class="col-md-12">
            <img src="img/societies/vegan.png" alt="Vegan Society">
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, ....
              Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque.
            </p>  
            <button class="btn btn-default"><a href="http://www.vegansociety.com/"></a>VISIT</button>
          </div>
      </div>

      <div class="row widget">
        <div class="col-md-12">
              <h5><i class="ion-social-instagram-outline"></i> Instagram</h5>
             <!--  <hr> -->
              <script async src="https://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>
              <div class="tintup" data-id="nativia" data-columns="2" style="height:400px;width:100%;"></div>
        </div>
      </div>


    </div><!-- end col-md-4 -->

  </div> <!-- end row -->

</div><!--  end container -->




<?php include('inc/footer.php'); ?>