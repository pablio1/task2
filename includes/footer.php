	</div>
	<!--footer-->
	<!-- <div id="footer">		
		<ul>
			<li class="<?php echo $a;?>"><a href="index.php">Home</a></li>
			<li class="navspacer"></li>
			<li class="<?php echo $b;?>"><a href="javascript:;">Handbags</a></li>		
			<li class="navspacer"></li>
			<li class="<?php echo $c;?>"><a href="javascript:;">Jewelry</a></li>						
			<li class="navspacer"></li>
			<li class="<?php echo $d;?>"><a href="javascript:;">Accessories</a></li>		
			<li class="navspacer"></li>
			<li class="<?php echo $e;?>"><a href="javascript:;">Sale</a></li>
			<li class="navspacer"></li>
			<li class="<?php echo $f;?>"><a href="javascript:;">Brand</a></li>
			<li class="navspacer"></li>
			<li class="<?php echo $g;?>"><a href="javascript:;">Checkout</a></li>
			<li class="navspacer"></li>
			<li class="<?php echo $h;?>"><a href="contact-us.php">Contact Us</a></li>
		</ul>
		<div id="copyright">
			<p>&copy; Copyright <?php echo (date('Y') == '2013') ? '2013' : '2013 - '.date('Y');?> <span>&bull;</span> <?php echo $compname; ?> <span>&bull;</span> <a target="_blank" href="#">Ecommerce Web Design</a>: <a target="_blank" href="#">Proweaver</a></p>
		</div>	
	</div> -->
<!--end footer-->
</div>
<!--end wrapper-->
<script>
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 4000); // Change image every 2 seconds
	}
</script>
</body>
</html>
<!-- 
****************************************************************************
****************************************************************************
Author: control #
Date: July 18, 2013
****************************************************************************
****************************************************************************
-->
<?php exit; ?>