<?php

include 'include/PHPMailer_5.2.0/class.phpmailer.php';
include 'include/PHPMailer_5.2.0/class.smtp.php';

if ($_POST['action']) {
    $action = @$_POST["action"];
    switch ($action) {
        case "sendComplaintMail": sendComplaintMail(); break;
        case "sendReviewMail": sendReviewMail(); break;
        case "sendEnquiryMail": sendEnquiryMail(); break;
    }
}

function sendComplaintMail()
{
    $full_name = @$_POST["full_name"];
    $contact_number = @$_POST["contact_number"];
    $contact_email = @$_POST["contact_email"];
    $issue_type = @$_POST["issue_type"];
    $message = @$_POST["message"];

    $data = array();
    $data['mail_from_name'] = $full_name;
    $data['subject'] = "New Complaint from - " . $full_name;

    $content = "<table rules='all' style='border-color: #666; width: 70%; border: 1px solid;' cellpadding='10'>";
    $content .= "<tr style='background: #eee;'><td width='30%'><b>Name </b></td><td>{$full_name}</td></tr>";
    $content .= "<tr><td><b>Contact Number </b></td><td>{$contact_number}</td></tr>";
    $content .= "<tr style='background: #eee;'><td><b>Contact Email </b></td><td>{$contact_email}</td></tr>";
    $content .= "<tr><td><b>Issue Type </b></td><td>{$issue_type}</td></tr>";
    $content .= "<tr style='background: #eee;'><td><b>Message </b></td><td>{$message}</td></tr>";
    $content .= "</table>";

    $data['message'] = $content;
    $data['mail_to'] = "aksnetlink@gmail.com"; // Changed to your email

    if (sendMailAuth($data)) {
        echo "Your complaint was submitted successfully. We'll contact you shortly.";
    }
}

function sendReviewMail()
{
    $full_name = @$_POST["full_name"];
    $designation = @$_POST["designation"];
    $contact_number = @$_POST["contact_number"];
    $contact_email = @$_POST["contact_email"];
    $message = @$_POST["message"];

    $data = array();
    $data['mail_from_name'] = $full_name;
    $data['subject'] = "New Review from - " . $full_name;

    $content = "<table rules='all' style='border-color: #666; width: 70%; border: 1px solid;' cellpadding='10'>";
    $content .= "<tr style='background: #eee;'><td width='30%'><b>Name </b></td><td>{$full_name}</td></tr>";
    $content .= "<tr><td><b>Designation </b></td><td>{$designation}</td></tr>";
    $content .= "<tr style='background: #eee;'><td><b>Contact Email </b></td><td>{$contact_email}</td></tr>";
    $content .= "<tr><td><b>Contact Number </b></td><td>{$contact_number}</td></tr>";
    $content .= "<tr style='background: #eee;'><td><b>Message </b></td><td>{$message}</td></tr>";
    $content .= "</table>";

    $data['message'] = $content;
    $data['mail_to'] = "aksnetlink@gmail.com";

    if (sendMailAuth($data)) {
        echo "Your review was submitted successfully. We'll contact you shortly.";
    }
}

function sendEnquiryMail()
{
    $full_name = @$_POST["full_name"];
    $contact_number = @$_POST["contact_number"];
    $contact_email = @$_POST["contact_email"];
    $subject = @$_POST["subject"];
    $message = @$_POST["message"];

    $data = array();
    $data['mail_from_name'] = $full_name;
    $data['subject'] = "New Enquiry from - " . $full_name;

    $content = "<table rules='all' style='border-color: #666; width: 70%; border: 1px solid;' cellpadding='10'>";
    $content .= "<tr style='background: #eee;'><td width='30%'><b>Name </b></td><td>{$full_name}</td></tr>";
    $content .= "<tr><td><b>Contact Number </b></td><td>{$contact_number}</td></tr>";
    $content .= "<tr style='background: #eee;'><td><b>Contact Email </b></td><td>{$contact_email}</td></tr>";
    $content .= "<tr><td><b>Subject </b></td><td>{$subject}</td></tr>";
    $content .= "<tr style='background: #eee;'><td><b>Message </b></td><td>{$message}</td></tr>";
    $content .= "</table>";

    $data['message'] = $content;
    $data['mail_to'] = "aksnetlink@gmail.com";

    if (sendMailAuth($data)) {
        echo "Your enquiry was submitted successfully. We'll contact you shortly.";
    }
}

function sendMailAuth($data)
{
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls'; // TLS encryption
    $mail->Port = 587;
    $mail->Host = 'fiberflow.co.in';
    $mail->Username = "enquiry@fiberflow.co.in";
    $mail->Password = "Enquiry@123";

    $mail->setFrom("enquiry@fiberflow.co.in", 'Fiberflow Enquiry');
    $mail->addAddress($data['mail_to'], "Fiberflow Team");
    $mail->Subject = $data['subject'];
    $mail->msgHTML($data['message']);

    if ($mail->Send()) {
        return true;
    } else {
        error_log("Mailer Error: " . $mail->ErrorInfo); // Log errors
        return false;
    }
}
