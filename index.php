<?php
set_include_path ('includes');
include "header.php"; 
$a = "current";

include 'nav.php';
include 'banner.php';
?>
<!-- main -->
<div id="main" class="clearfix">
	<div class="bg-main" id="hide-tab"></div>
	<div class="bg-services">
		<div class="service-container">
			<div class="service">
				<img src="./images/service-img.jpg" class="service-img" alt="">
				<div class="service-name">Personal Care Services</div>
				<div class="service-content">More information about the company will be posted soon.</div>
				<div class="service-link"><button class="button btn-here">CLICK HERE <i class="fas fa-arrow-circle-right"></i></button></div>
			</div>
			<div class="service">
				<img src="./images/service-img.jpg" class="service-img" alt="">
				<div class="service-name">Companionship Services</div>
				<div class="service-content">More information about the company will be posted soon.</div>
				<div class="service-link"><button class="button btn-here">CLICK HERE <i class="fas fa-arrow-circle-right"></i></button></div>
			</div>
			<div class="service">
				<img src="./images/service-img.jpg" class="service-img" alt="">
				<div class="service-name">Home Care Services</div>
				<div class="service-content">More information about the company will be posted soon.</div>
				<div class="service-link"><button class="button btn-here">CLICK HERE <i class="fas fa-arrow-circle-right"></i></button></div>
			</div>
			<div class="service">
				<img src="./images/service-img.jpg" class="service-img" alt="">
				<div class="service-name">View More Services</div>
				<div class="service-content">More information about the company will be posted soon.</div>
				<div class="service-link"><button class="button btn-here">CLICK HERE <i class="fas fa-arrow-circle-right"></i></button></div>
			</div>
		</div>
	</div>
	<div class="w-container" id="hide-tab">
		<div class="welcome-img">
			<img src="./images/20.jpg" alt="">
		</div>
		<div class="w-content">
			<h1>Welcome to</h1>
			<h2>Dembi</h2>
			<h3>Home Health Center</h3>
			<p>We are using these temporary contents on the website. The dummy text are for display purposes 
				only to show the volume of content that will be placed on this page. <br/><br/>
				Dummy Text for the reader to review. Words shown on this layout are placeholders.
				 This space is reserved for more details about the company.
			</p>
		</div>
	</div>
	<div style=" justify-content:center"  id="hide-tab">
		<div class="bg-endmain" id="hide-tab"></div>
		<div class="m-container">
			<div class="m-contents">
				<div class="m-content-d">
					<h1>Who Are We</h1>
					<h2>Our Mission Statement</h2>
					<p>Dummy text for the reader to review. Words shown on this layout
						are placeholders.
					</p>
					<button>ABOUT US <i class="fas fa-arrow-circle-right"></i></button>
				</div>
				<div class="m-content-d1">
					<img src="./images/service-img.jpg" alt="">
					<h1>Insurance <br/><label style="color:#6a96b4">Accepted</label></h1>
					<p>You are reading dummy text as placeholders for this layout.</p>
					<button>CLICK HERE <i class="fas fa-arrow-circle-right"></i></button>
				</div>
				<div class="m-content-d1">
				<img src="./images/service-img.jpg" alt="">
					<h1>Meet Our <br/><label style="color:#6a96b4">Caregivers</label></h1>
					<p>You are reading dummy text as placeholders for this layout.</p>
					<button>CLICK HERE <i class="fas fa-arrow-circle-right"></i></button>
				</div>
				<img src="./images/25.jpg" style="margin-top: 50px; margin-left: 10px" height="400" width="250" alt="">
				
			</div>
		</div>
		<div class="bg-rendmain" id="hide-tab"></div>
	</div>
	<?php include 'bottom.php'; ?>
	
</div><!-- /main -->
<?php include 'footer.php'; ?>