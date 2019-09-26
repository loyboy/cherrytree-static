</main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="copyright">
            Contact Us:<br>
            support@cherrytree.com <br>
            </div>
        </div>
        <div class="col-lg-4"  align="center">
          <img src="img/tree2.png" width='100' style='margin-top: 15px;'>
        </div>
        <div class="col-lg-4">
            <div class="copyright">
            CherryTree Market Holdings inc.<br>
            &copy; Copyright <strong> <?php echo "2017-".date('Y'); ?></strong>
            </div>
           
        </div>
      </div>
      
    </div>
  </footer><!-- #footer -->

  <!-- <center style="background-color: #f2f5f8;padding: 10px;font-size: 11px;border-top: 1px solid #ddd;">Developed by <a href="http://mitlag.com" target="_blank">Mitlag Solutions</a></center> -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script>
    console.log("Seen the  problem");
   /* $('div.collapse').on('shown', function () {
        $(this).parent("div").find(".fa-minus-circle").removeClass("fa-minus-circle").addClass("fa-minus-circle");
        console.log("Shown div");
    });

    $('div.collapse').on('hidden', function () {
        $(this).parent("div").find(".fa-plus-circle").removeClass("fa-plus-circle").addClass("fa-minus-circle");
        console.log("Minus div");
    });*/
    $('.collapse').on('hidden.bs.collapse', function (e) {
        $('.collapse').eq(1).collapse('show');
        console.log("Seen the  problem");
       // e.preventDefault();
    });

  /*$(document).ready(function(){
    console.log("Seen the  problem");
    if ($('div.collapse').is(':visible')) { 
    // The element is visible, do something
      $(this).parent("div").find(".fa-minus-circle").removeClass("fa-minus-circle").addClass("fa-minus-circle");
      console.log("Shown div");      
    } else {
        // The element is NOT visible, do something else
      $(this).parent("div").find(".fa-plus-circle").removeClass("fa-plus-circle").addClass("fa-minus-circle");
      console.log("Minus div");
    }
  });*/
  </script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  

</body>
</html>