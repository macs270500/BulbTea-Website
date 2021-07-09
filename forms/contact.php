<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  //$receiving_email_address = 'macs270500@gmail.com';

  //if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //  include( $php_email_form );
  //} else {
  //  die( 'Unable to load the "PHP Email Form" Library!');
  //}
  //
  //$contact = new PHP_Email_Form;
  //$contact->ajax = true;
  //
  //$contact->to = $receiving_email_address;
  //$contact->from_name = $_POST['name'];
  //$contact->from_email = $_POST['email'];
  //$contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */
  
//if(isset($_POST['email']) && $_POST['email'] != ''){
//  
//  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
//  {

if(isset($_POST['submit'])){
  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  //submit the form
    $userName = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "macs270500@gmail.com";
    
    $body="";
    
    $body .= "From: ".$userName. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Message: ".$message. "\r\n";
    
    mail($to,$subject,$body);
  }
}
//  }
//}
?>
