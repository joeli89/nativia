<?php 

$page = "products";
include("inc/store-products.php");
$pageTitle = "Products";
include('inc/header.php'); 

?>

<div class="container">

  <div class="row products">
    <div class="col-md-3">
    
    <h3>Category</h3>
    <hr>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Supplements
              </a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              <ul>
                <h5>Daily Vitality</h5>
                <li>Multivitamins</li>
                <li>Omega 3 Fish Oils</li>
              </ul>
              <ul>
                <h5>Beauty</h5>
                <li>Biotin</li>
                <li>Vitamin B5</li>
              </ul>
              <ul>
                <h5>Weight Loss</h5>
                <li>Garcinia Cambogia</li>
                <li>Green Coffee Bean Extract</li>
                <li>Raspberry Ketones</li>
                <li>Colon Cleanse</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Superfoods
              </a>
            </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
              <ul>
                <h5>Seed & Nuts</h5>
                <li>Certified Organic Chia Seeds</li>
                <li>Spirulina Powder</li>
                <li>Wheatgrass Powder</li>
              </ul>
              <ul>
                <h5>Oils</h5>
                <li>Certified organic Coconut Oil </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="col-md-9 text-center">
      <h3>Products</h3>
      <hr>
      <!-- <div class="row"> -->
      <?php 
        $count = 1;
        shuffle($products);
        foreach($products as $product) { 
            if($count==0 OR is_int($count/3)) {
            echo '<div class="row">';
        } ?>

      <!-- ===== Start of Product ====== -->
        <div class="col-md-4 product-item">
          <a href="#" data-toggle="modal" data-target='#<?php echo $product["target"]; ?>'>
            <img src='<?php echo $product["image"]; ?>' alt='<?php echo $product["description"]; ?>'>
          </a>
          <h4><?php echo $product["title"]; ?></h4>
          <h6><?php echo $product["quantity"]; ?></h6>
          <h4 class="price">£ <?php echo $product["price"];?></h4>

          <button class="btn btn-default" data-toggle="modal" data-target='#<?php echo $product["target"]; ?>'>view</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id='<?php echo $product["target"]; ?>' tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><?php echo $product["title"]; ?></h4>
              </div>

              <div class="modal-body">
                <div class="row">
                  <div class="col-md-6">
                    <img src='<?php echo $product["image"]; ?>' alt='<?php echo $product["description"]; ?>'>
                  </div>
                  <div class="col-md-6 text-left">
                    <h4><?php echo $product["title"]; ?></h4>
                    <h6><?php echo $product["quantity"]; ?></h6>
                    <h4 class="price">£ <?php echo $product["price"];?></h4>
                    <p>
                      <?php echo $product["description"];?>
                    </p>
                    <h5 class="supplment-facts">Supplment Facts</h5>
                    <p>
                      <?php echo $product["facts"];?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-default"><a href='<?php echo $product["link"]; ?>'>Buy Now</a></button>
              </div>
            </div>
          </div>
        </div>

      <!-- ===== End of Product ====== -->
      <?php 
        if($count==0 OR is_int($count/3)){
            echo '</div>';
        }
        $count++;

      } ?>


      <!-- </div> --> <!-- end row -->

    </div>
  </div>

</div><!--  end container -->



<?php include('inc/footer.php'); ?>