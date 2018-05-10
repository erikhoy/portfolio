	  <footer class="footer w3-black">
        <div class="container">
          <a href="https://www.facebook.com/erik.hoy.1" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="https://www.instagram.com/erikshoy/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/in/erikhoy/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/erikhoy" target="-blank"><i class="fab fa-github"></i></a>
          <a href="mailto:erikshoy@gmail.com"><i class="fas fa-envelope"></i></a>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/jquery.fittext.js"></script>
	<script>
  		jQuery("#responsive_headline").fitText(1.8);
	</script>
	<script>
		function openModal(idName) {
		  document.getElementById(idName).style.display = "block";
		}

		function closeModal(idName) {
		  document.getElementById(idName).style.display = "none";
		}

		var slideIndex = 1;
		var idName = "modal2";
		showDivs(slideIndex, idName);

		function plusDivs(n, idName) {
		  showDivs(slideIndex += n, idName);
		}

		function currentDiv(n, idName) {
		  showDivs(slideIndex = n, idName);
		}

		function showDivs(n, idName) {
		  var i;
		  // var idName = 'modal1';
		  var x = document.getElementById(idName).getElementsByClassName("mySlides");
		  // var x = document.getElementsByClassName("mySlides");
		  // var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > x.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
		     x[i].style.display = "none";
		  }
		  // for (i = 0; i < dots.length; i++) {
		  //    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");

		  // }
		  x[slideIndex-1].style.display = "block";
		  // dots[slideIndex-1].className += " w3-opacity-off";
		  // captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>
	<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
    		if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        		document.getElementById("myBtn").style.display = "block";
		    } else {
		        document.getElementById("myBtn").style.display = "none";
		    }
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		    document.body.scrollTop = 0; // For Safari
		    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
	</script>
  </body>
</html>