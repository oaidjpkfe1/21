<?php
//require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
 require("sendgrid-php/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases
//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

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("lusigonzales06@gmail.com", "soporte");
$email->setSubject("Contacto conmigo");
$email->addTo("lusigonzales06@gmail.com", "Soporte");
$email->addContent("text/plain", "correo para contacto");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid('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'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '.  $e->getMessage(). "\n";
}