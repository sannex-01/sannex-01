<?php
require '../config/mail.php';

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// use PHPMailer\PHPMailer\Exception;

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_OFF;
$mail->isSMTP();
$mail->Host = SMTP_HOST;
$mail->SMTPAuth = true;
$mail->Username = SMTP_USERNAME;
$mail->Password = SMTP_PASSWORD;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
$mail->Port = SMTP_PORT; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

$from = $_POST["email"];

$services = array(
  "Website Design" => "<p><strong>Website Design</strong></p>
    <p>Our team of creative designers will craft a visually appealing and user-friendly website that reflects your organization\'s unique identity and values. 
      We will ensure that your website is optimized for both desktop and mobile devices, providing an exceptional user experience.</p>
    <p><em>Cost:</em> Based on project scope</p>
    <p><em>Timeline:</em> 2-6 weeks</p>",

  "SEO Services" => "<p><strong>SEO Services</strong></p>
    <p>To maximize your online visibility and organic traffic, we will implement a comprehensive SEO strategy specifically tailored to the Nigerian market.
      This will include keyword research, on-page optimization, and ongoing SEO efforts to help your website rank higher in search engine results.</p>
    <p><em>Cost:</em> ₦80,000 per month (Ongoing service)</p>
    <p><em>Timeline:</em> Continuous improvement, initial results visible within 2-4 months</p>",
  
  "ML Model Development" => "<p><strong>ML Model Development</strong></p>
    <p>Our ML Model Development services include:</p>
    <ul>
      <li>Data collection and preprocessing</li>
      <li>Model selection and development</li>
      <li>Training and fine-tuning of ML models</li>
      <li>Integration of ML models into your existing systems or applications (if applicable)</li>
      <li>Rigorous testing and validation to ensure model accuracy and reliability</li>
    </ul>
    <p><em>Cost:</em> Based on project scope</p>
    <p><em>Timeline:</em> 2-4 weeks</p>",

  "Email Marketing" => "<p><strong>Email Marketing</strong></p>
    <p>Engage your audience and foster lasting relationships through targeted Email Marketing campaigns. 
      We will develop and execute email campaigns that resonate with your audience, drive conversions, and keep your organization top-of-mind in the Nigerian market.</p>
    <p><em>Cost:</em> ₦10,000 - ₦50,000 per campaign (Customized based on campaign complexity)</p>
    <p><em>Timeline:</em> Each campaign typically takes 2-4 weeks, including planning, design, and execution</p>",

  "Analytics and Reporting" => "<p><strong>Analytics and Reporting</strong></p>
    <p>We will set up and configure Google Analytics to provide you with valuable insights into your website's performance. 
      These insights will help you make data-driven decisions to improve user engagement, conversion rates, and overall online success.</p>
    <p><em>Cost:</em> ₦50,000 (One-time setup fee)</p>
    <p><em>Timeline:</em> 1-2 weeks</p>",

  "Content Management" => "<p><strong>Content Management</strong></p>
    <p>Our team will integrate a robust CMS into your website, empowering you to easily manage and update your content. 
      You'll have the flexibility to add, edit, or delete content without any technical expertise, ensuring your website remains fresh and relevant.</p>
    <p><em>Cost:</em> Based on project scope</p>
    <p><em>Timeline:</em> 4-6 weeks</p>"
);

if (isset($_POST['get_quote'])) {
  //Recipients
  $mail->AddReplyTo('akinyemisamuel170@gmail.com', 'Samuel Akinyemi');
  $mail->setFrom(SMTP_USERNAME, "Sannex Information Centre");
  $mail->addAddress($from); //Add a recipient

  $service = $_POST["service"];

  //Content
  $mail->isHTML(true); //Set email format to HTML

  $mail->Subject = "Proposal for Sannex $service";

  $serviceQuote = $services[$service];
  if ($service == "Web Services") {
    $serviceQuote = $services["Website Design"].' '.$services["SEO Services"].' '.$services["ML Model Development"] 
      . ' ' . $services["Email Marketing"].' '.$services["Analytics and Reporting"].' '.$services["Content Management"];
  }

  $mail->Body = '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Proposal for Website Design and Digital Marketing Services</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }
            h1 {
                color: #333;
            }
            p {
                font-size: 16px;
                line-height: 1.6;
            }
            ul {
                list-style-type: disc;
                padding-left: 20px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Quote for '.$service.'</h1>
            <p>Dear Client,</p>
            <!-- Insert the rest of your quote content here -->
            <p>We are thrilled at the opportunity to collaborate with you to enhance your digital presence and drive online success. 
              Our tailored services encompass Website Design, SEO (Search Engine Optimization), Machine Learning Development, Google Analytics implementation, 
              Content Management System (CMS) integration, and Email Marketing to propel your organization to new heights in the Nigerian market.</p>

            <!-- Insert service details here -->

            <p><strong>Pricing and Timeline</strong></p>
            '.$serviceQuote.'

            <!-- Insert pricing and timeline for other services here -->

            <p><strong>Payment Terms</strong></p>
            <p>We propose a payment structure as follows:</p>
            <ul>
                <li>30% of the total project cost due upon project initiation.</li>
                <li>30% of the total project cost due upon the completion of the Website Design phase.</li>
                <li>Monthly payments for ongoing SEO and/or hosting services.</li>
                <li>40% of the total project cost due upon project completion and final client approval.</li>
            </ul>

            <p><strong>Timeline</strong></p>
            <p>The timeline provided is an estimate and may vary depending on project complexity, content availability, and client feedback. 
            We are committed to delivering high-quality results within the stipulated timeframe and will keep you updated on progress throughout the project.</p>

            <p><strong>Additional Services</strong></p>
            <p>If you require any additional services or modifications beyond the scope of this proposal, we will provide detailed pricing and timelines for those as needed.</p>

            <p>Please note that the pricing mentioned here is indicative and may vary based on the specific requirements and your goals. 
              We are open to further discussion and negotiation to ensure that our services align with your budget and objectives.</p>

            <p>We are excited to get started and look forward to your confirmation to initiate the project. 
            If you have any questions or require further clarification on the pricing or timeline, 
            please don\'t hesitate to contact us. We are here to assist you every step of the way.</p>

            <p>Sincerely,<br>
            Samuel Akinyemi<br>
            Sannex Web Services<br>
            Contact: <a href="tel:+2347048706198">+234 704 870 6198<a/></p>
        </div>
    </body>
    </html>

    ';

  if ($mail->send()) {
    $responseData = array(
      "status" => "success",
      "title" => "Quote Request Sent",
      "message" => "Your quote request has been sent successfully. We'll get back to you shortly via email. If you don't receive our email in your inbox, please check your spam folder."
    );
  } else {
    $responseData = array(
      "status" => "failed",
      "title" => "Quote Request Failed",
      "message" => "We apologize, but there was an issue processing your quote request. Please ensure that you've entered a valid email address and try again. If the problem persists, feel free to contact our support team for assistance. Thank you for your understanding."
    );
  }

} else {
  $name = $_POST["name"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  $mail->AddReplyTo($from, $name);
  $mail->setFrom(SMTP_USERNAME, "Sannex Information Centre");
  $mail->addAddress(SMTP_USERNAME, "Sannex Information Centre");
  $mail->AddBCC('akinyemisamuel170@gmail.com', 'Samuel Akinyemi');

  //Content
  $mail->isHTML(true); //Set email format to HTML

  $mail->Subject = $subject;
  $mail->Body = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <title>Contact Message</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
                background-color: #fff;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            h2 {
                color: #333;
            }

            p {
                margin: 0;
                color: #555;
            }

            .highlight {
                color: #007bff;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Contact Message</h2>
            <p><strong>Name:</strong> <span class='highlight'>$name</span></p>
            <p><strong>Message:</strong></p>
            <p>$message</p>
        </div>
    </body>
    </html>
    ";

  if ($mail->send()) {
    $responseData = array(
      "status" => "success",
      "title" => "Contact Info Sent!",
      "message" => "Your message has been sent successfully. We will get back to you shortly."
    );
  } else {
    $responseData = array(
      "status" => "failed",
      "title" => "Contact Failed to Send!",
      "message" => "We apologize, but there was an issue processing your quote request. Please ensure that you've entered a valid email address and try again. If the problem persists, feel free to contact our support team for assistance. Thank you for your understanding."
    );
  }
}

// Set the appropriate headers for JSON response
header('Content-Type: application/json');

// Encode the data as JSON and send it
echo json_encode($responseData);
?>