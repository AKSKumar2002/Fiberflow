<?php include('include/header.php'); ?>

<main class="site-main">
    <!-- page-header -->
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <!-- page-header-inner -->
            <div class="page-header-inner text-center">
                <h2 class="wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="100ms">Review</h2>
                <ul class="page-header-inner-title list-unstyled wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <li class="arrow-right"><a href="index.php">Home</a></li>
                    <li><h4>Review</h4></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- contact-page -->
    <section class="contact-page" style="margin-top: 0px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <!-- contact-page-right -->
                    <div class="contact-page-right">
                        <div class="contact-page-form">
                            <h3 class="contact-page-form-title">Send Us Your Review</h3>
                            <p class="contact-page-form-text">Share Your Review to Us, it will be very helpful for us to Improve the service</p>

                            <form id="reviewForm" class="contact-page__form-box contact-form-validated" style="margin-bottom: 40px;">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label for="review_full_name">Full Name</label>
                                            <input type="text" class="input-contact-text" name="review_full_name" required placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label for="review_designation">Designation</label>
                                            <input type="text" class="input-contact-text" name="review_designation" required placeholder="Your Designation">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label for="review_contact_number">Mobile</label>
                                            <input type="number" class="input-contact-text" name="review_contact_number" required placeholder="Mobile number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label for="review_contact_email">Email</label>
                                            <input type="email" class="input-contact-text" name="review_contact_email" required placeholder="support@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-page-input-box">
                                            <label for="review_message">Your Review</label>
                                            <textarea name="review_message" class="input-contact-text" required placeholder="Write your review message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-page-input-box">
                                            <div class="theme-btn">
                                                <button type="submit" class="btn btn-bg-primary">Submit Review<i class="icon-1"></i></button>
                                                <img id="fiberflow_loader" src="assets/images/loader.gif" style="width: 40px; display: none;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div id="formAlert" class="alert" style="display: none;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- EmailJS SDK -->
<script src="https://cdn.jsdelivr.net/npm/emailjs-com@3/dist/email.min.js"></script>
<script>
    emailjs.init("z91vd5nbf_X9DkX3k"); // Replace with your public EmailJS key

    document.getElementById("reviewForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const submitBtn = document.querySelector("button[type='submit']");
        submitBtn.disabled = true;
        document.getElementById("fiberflow_loader").style.display = "inline-block";

        const form = this;
        const now = new Date().toLocaleString();
        const formData = new FormData(form);
        formData.append("time", now); // Optional: send timestamp

        emailjs.sendForm("service_klrmigc", "template_owyf8lp", formData)
            .then(function () {
                showAlert("✅ Your review was submitted successfully!", "success");
                form.reset();
            }, function (error) {
                showAlert("❌ Failed to send review. Please try again later.", "danger");
                console.error("EmailJS Error:", error);
            })
            .finally(function () {
                submitBtn.disabled = false;
                document.getElementById("fiberflow_loader").style.display = "none";
            });
    });

    function showAlert(message, type) {
        const alertBox = document.getElementById("formAlert");
        alertBox.className = `alert alert-${type}`;
        alertBox.innerText = message;
        alertBox.style.display = "block";
        setTimeout(() => alertBox.style.display = "none", 5000);
    }
</script>

<?php include('include/footer.php'); ?>
