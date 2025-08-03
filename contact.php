<?php
	include ('include/header.php');
?>

		<main class="site-main">
            <!-- page-header -->
            <section class="page-header">
                <div class="page-header-bg"></div>
                <div class="container">
                    <!-- page-header-inner -->
                    <div class="page-header-inner text-center">
                        <h2 class="wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms">Contact</h2>
                        <ul class="page-header-inner-title list-unstyled wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
                            <li class="arrow-right"><a href="index.php">Home</a></li>
                            <li>
                                <h4>Contact</h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- contact-page -->
            <section class="contact-page">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12 col-sm-12">
                            <div class="contact-page-left wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="100ms">
                                <!-- section-title -->
                                <div class="section-title">
                                    <i class="icon-main-icon"></i>
                                    <span>Asked Questions</span>
                                </div>
                                <!-- section-main-title -->
                                <div class="section-main-title">
                                    <h2>Talk with us for your broadband need</h2>
                                </div>
                                <!-- contact-info -->
                                <div class="contact-info">
                                    <ul>
                                        <li class="contact-inner wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="100ms">
                                            <div class="icon">
                                                <i class="icon-map-marker"></i>
                                            </div>
                                            <div class="text-box">
                                                <span>Address</span>
                                                <h3>Othakalmandapam, Coimbatore, Tamilnadu.</h3>
                                            </div>
                                        </li>
                                        <li class="contact-inner wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="300ms">
                                            <div class="icon">
                                                <i class="icon-phone-volume"></i>
                                            </div>
                                            <div class="text-box">
                                                <span>Phone</span><br>
												<span>Broadband Services</span>
                                                <h3>+91 99407 97720 <br> +91 93603 97340 </h3>
												<span>Leaseline Services</span>
												<h3>+91 98439 52232 <br> +91 97916 11143</h3>
                                            </div>
                                        </li>
                                        <li class="contact-inner wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="500ms">
                                            <div class="icon">
                                                <i class="icon-gmail-box"></i>
                                            </div>
                                            <div class="text-box">
                                                <span>Email Us</span>
                                                <h3>fiberflow.ind@gmail.com <br> fiberflow.tech@gmail.com</h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="200ms">
                            <!-- contact-page-right -->
                            <div class="contact-page-right">
                                <div class="contact-page-form">
                                    <h3 class="contact-page-form-title">Send Us Message</h3>
                                    <p class="contact-page-form-text">Questions or you would just like to say hello,
                                        contact us.</p>
                                    <form id="frmEnquiry" method="POST" class="contact-page__form-box contact-form-validated" style="margin-bottom: 40px;">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-page-input-box">
                                                    <label for="full-Name-123">Full Name</label>
                                                    <input type="text" class="input-contact-text" id="full_name" name="full_name" placeholder="Full Name" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-page-input-box">
                                                    <label for="email-123">Mobile</label>
                                                    <input type="number" class="input-contact-text" id="contact_number" name="contact_number" placeholder="Mobile number" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-page-input-box">
                                                    <label for="email-123">Email</label>
                                                    <input type="email" class="input-contact-text" id="contact_email" name="contact_email" placeholder="suppot@gmail.com" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6">
                                                <div class="contact-page-input-box">
                                                    <label for="textbox">Subject</label>
                                                    <input type="text" class="input-contact-text" id="subject" name="subject" placeholder="I would like to discussed" required>
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12">
                                                <div class="contact-page-input-box">
                                                    <label for="message-123">Message</label>
                                                    <textarea name="message" class="input-contact-text" id="message" name="message" placeholder="write message" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12">
                                                <div class="contact-page-input-box">
                                                    <div class="theme-btn">
                                                        <button type="button" id="btn_submit" class="btn btn-bg-primary" onclick="submitEnquiry()">
															Send Us Message<i class="icon-1"></i>
														</button>
														<img id="fiberflow_loader" src="assets/images/loader.gif" style="width: 40px; display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</main>
		
		
<script>
	function submitEnquiry()
	{
		var validator = $("#frmEnquiry").validate({
		rules: {
			full_name: {required:true},
			contact_number: {required:true, number:true},
			contact_email: {required:true, email:true},
			subject: {required:true},
			message: {required:true}
			},
			messages: {
				full_name: {required:"Please enter your name"},
				contact_number: {required:"Mobile Number required"},
				contact_email: {required:"EMail required"},
				subject: {required:"Subject required"},
				message: {required:"Content required"}
			}
		});
	
		if(validator.form())
		{
			//Hide submit button and show loader
			$("#btn_submit").css('display', 'none');
			$("#fiberflow_loader").css('display', 'block');
			
			var full_name = document.getElementById("full_name").value;
			var contact_number = document.getElementById("contact_number").value;
			var contact_email = document.getElementById("contact_email").value;
			var subject = document.getElementById("subject").value;
			var message = document.getElementById("message").value;

			var action = "sendEnquiryMail";
			var dataString = "full_name="+full_name+"&contact_number="+contact_number+"&contact_email="+contact_email+"&subject="+subject+"&message="+message;

			$.ajax
			({
				type: "POST",
				url: "ajaxServices.php",
				data: "action="+action+"&"+dataString,
				cache: false,
				success: function(html)
				{
					//alert(html);
					swal(html, "", "success");
					document.getElementById("full_name").value = "";
					document.getElementById("contact_number").value = "";
					document.getElementById("contact_email").value = "";
					document.getElementById("subject").value = "";
					document.getElementById("message").value = "";
					
					//Show submit button and hide loader
					$("#btn_submit").css('display', 'block');
					$("#fiberflow_loader").css('display', 'none');
					
					saveEnquiry(dataString);
				}
			});
		}
	}
	
	function saveEnquiry(dataString)
	{
		var api_method = "saveWebsiteEnquiry";
		
		$.ajax
		({
			type: "POST",
			url: "https://swasam.in/dev/fiberflow/fiberflow_admin_api/public/api/" + api_method,
			data: dataString,
			cache: false,
			success: function(response)
			{
				console.log(response);
			}
		});
	}
</script>
		
<?php
	include ('include/footer.php');
?>