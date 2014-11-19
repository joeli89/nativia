<?php 
$page = "contact";
$pageTitle = "Contact";
/*$headImage = "img/heading/head2.png";*/
include('inc/header.php');

?>

<section>
<div id="contact-body">
	<div class="container">
		<div class="col-md-6 text-center">

				<div class="contact-image">
					<img src="img/logo/logo-green.png">
				</div>
				<hr>
				<div class="address">
					<h4><a href="mailto:info@nativiahealth.com"><p>info@nativiahealth.com</p></a><h4>
					<h4>
						Nativia,<br>
						23 High View,<br>
						Cheam,Surrey,<br>
						Sm2 7DZ<br>
					</h4>
					<h6>
						For wholesale opportunities, please write to: <a href="mailto:info@nativiahealth.com">info@nativiahealth.com</a> or call <b>07540739168</b>.
					</h6>
				</div>

			</div>

		<div class="col-md-6">

			<div id="contactform">
				<div class="contactform-text text-center">
					<h4>We always love hearing from customers, please feel free to contact us.</h4>
				</div>
				<hr>
				<form method="post" action="">
					<input type="text" name="name" placeholder="Name" class="contact-name">
					<input type="text" name="email" placeholder="Email" class="contact-email">
					<textarea name="message" placeholder="Message" rows="8" ></textarea>
					<button type="submit" class="btn btn-default">SEND</button>
				</form>

			</div>

		</div>
	</div>
</div>
</section>

<?php 

include('inc/footer.php');

?>