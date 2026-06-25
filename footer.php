<footer>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4">
        <a href="#" class="ft-logo">
          <img src="images/logo.png" alt="" class="img-fluid">
        </a>
        <p>There are many variations of passages of Lorem Ipsum available.</p>

      </div>
      <div class="col-lg-5 text-center">
        <div class="ft-contact">
            <img src="images/ft-icon.png" alt="" class="img-fluid">
            <div class="no-sec">
              <h2 class="ft-title">Get In Touch</h2>
              <a href="tel:+001234567890">+00 1234 5678 90</a>
            </div>
        </div>
      </div>
      <div class="col-lg-3">
        <h2 class="ft-title">Follow us on</h2>
        <ul class="ft-social">
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<div class="cp-bx">
  <div class="container">
    <div class="row justify-content-between">
      <p>Payment options: <img src="images/cards.png" alt="" class="img-fluid"></p>
      <ul class="footer-terms-ul">
        <li><a href="#">Terms & Conditions</a></li>     
        <li><a href="#">Return & Refund Policy</a></li>     
        <li><a href="#">About Us</a></li>     
        <li><a href="#">Privacy Notice </a></li>    
        <li><a href="#">FAQ</a></li>
      </ul>
    </div>

  </div>
</div>

<script src="js/source.js"></script>
<script src="js/custom.js"></script>

<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>
  <script>
    new WOW().init();
  </script>

</body>
</html>