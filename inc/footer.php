    <footer> 


      <div class="container">

        <div class="row footer-content">

          <div class="col-md-4">
            <h4>Footer-Widget 1</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam 
              malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.
            </p>
          </div>

          <div class="col-md-4">
            <h4>Social</h4>
            <div class="row">
              <div class="col-xs-3 col-xs-offset-2"><h1><i class="ion-social-facebook"></h1></i></div>
              <div class="col-xs-3"><h1><i class="ion-social-twitter"></h1></i></div>
              <div class="col-xs-3"><h1><i class="ion-social-instagram"></h1></i></div>
            </div>
          </div>

          <div class="col-md-4">

            <h4>Subscribe</h4>
            <input type="email" id="" name="EMAIL" placeholder="Email" required="" class="subscribe-input">
            <input class="submit-btn" type="submit" value="SIGN UP">
          </div>


          <div class="row">
            <div class="col-md-12 text-center copyright">
              <hr>
              <img src="img/logo/logo-footer.png" alt="Company Logo">
              <p>&copy; <?php echo date('Y'); ?> Nativia. Designed by <a href="#">Joe Li</a>.</p>
            </div>
          </div>

        </div>

      </div>

    </footer>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/maps.js"></script>
    <script src="js/bootstrap-magnify.min.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script>
      $(function(){
      $('#Container').mixItUp();  
      });
    </script>
    <script src="js/modernizr.js"></script>
    <script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlay button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".img").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".img").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>

  </body>
</html>