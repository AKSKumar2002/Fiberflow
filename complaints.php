<?php include('include/header.php'); ?>

<main class="site-main">
    <section class="page-header">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-inner text-center">
                <h2 class="wow fadeInUp animated">Complaints</h2>
                <ul class="page-header-inner-title list-unstyled wow fadeInUp animated">
                    <li class="arrow-right"><a href="index.php">Home</a></li>
                    <li><h4>Complaints</h4></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-page" style="margin-top: 0px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 offset-md-2 wow fadeInRight animated">
                    <div class="contact-page-right">
                        <div class="contact-page-form">
                            <h3 class="contact-page-form-title">Send Us Your Complaints</h3>
                            <p class="contact-page-form-text">Share the Internet connectivity issues, Payments queries etc here, we will address</p>
                            
                            <form id="complaintForm" class="contact-page__form-box contact-form-validated" style="margin-bottom: 40px;">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label>Full Name</label>
                                            <input type="text" name="full_name" id="full_name" class="input-contact-text" required placeholder="Full Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label>Mobile</label>
                                            <input type="number" name="contact_number" id="contact_number" class="input-contact-text" required placeholder="Mobile number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label>Email</label>
                                            <input type="email" name="contact_email" id="contact_email" class="input-contact-text" required placeholder="support@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="contact-page-input-box">
                                            <label>Issue Type</label>
                                            <input type="text" name="issue_type" id="issue_type" class="input-contact-text" required placeholder="Connectivity, Payment...">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-page-input-box">
                                            <label>Message</label>
                                            <textarea name="message" id="message" class="input-contact-text" required placeholder="Write your message here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12">
                                        <div class="contact-page-input-box">
                                            <div class="theme-btn">
                                                <button type="submit" class="btn btn-bg-primary" id="btn_submit">
                                                    Send Us Message<i class="icon-1"></i>
                                                </button>
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
    (function () {
        emailjs.init("YfoUE3KGIs96SsiaK"); // Your EmailJS public key
    })();

    document.getElementById("complaintForm").addEventListener("submit", function (e) {
        e.preventDefault();

        const submitBtn = document.getElementById("btn_submit");
        submitBtn.disabled = true;
        document.getElementById("fiberflow_loader").style.display = "inline-block";

        const fullName = document.getElementById("full_name").value;
        const contactNumber = document.getElementById("contact_number").value;
        const contactEmail = document.getElementById("contact_email").value;
        const issueType = document.getElementById("issue_type").value;
        const message = document.getElementById("message").value;

        const templateParams = {
            name: fullName,
            phone: contactNumber,
            email: contactEmail,
            issue_type: issueType,
            message: message,
            time: new Date().toLocaleString()
        };

        emailjs.send("service_5chic69", "template_gj8w636", templateParams)
            .then(function () {
                showAlert("Your complaint was submitted successfully!", "success");
                document.getElementById("complaintForm").reset();
            }, function (error) {
                showAlert("Failed to send complaint. Please try again.", "danger");
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
