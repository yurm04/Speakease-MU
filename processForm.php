<?php
/*
  RESOURCES
  http://code.tutsplus.com/tutorials/build-a-neat-html5-powered-contact-form--net-20426
  http://code.tutsplus.com/tutorials/sanitize-and-validate-data-with-php-filters--net-2595
  http://buildinternet.com/2008/12/how-to-validate-a-form-using-php-part-2-streamline-using-arrays/
  https://bootstrapbay.com/blog/working-bootstrap-contact-form/
 */


define('BASE_URL', 'http://www.speak-ease.com/');
define('SUCCESS', 'contactConfirm.php');
define('FAILURE', 'contactFailure.php');
define('EMAIL_ADDRESS', 'yurm04@gmail.com');

// PROCESS & VALIDATE

function processFormInput()
{
  if ( isset($_POST) ) {
    $name = '';
    $email = '';
    $message = '';

    if ( issset($_POST['username']) ) {
      $name = filter_var( $_POST['username'], FILTER_SANITIZE_STRING );
    }
    
    if ( issset($_POST['email']) ) {
      $email = filter_var( $_POST['email'], FILTER_SANITIZE_STRING );
    }
    
    if ( issset($_POST['message']) ) {
      $message = filter_var( $_POST['message'], FILTER_SANITIZE_STRING );
    }

    if ($name && $email && $message) {
      sendEmail($name, $mail, $message);
      $success = BASE_URL . SUCCESS;
      header('location: ' . $success);
    } else {
      $failed = BASE_URL . FAILURE;
      header('location: ' . $failed);
    }
  } else {
    $failed = BASE_URL . FAILURE;
    header('location: ' . $failed);
  }
}


function sendEmail($name, $mail, $message)
{
  //send email if all is ok
  $headers = "From: info@example.com" . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
  $body = "<p>You have recieved a new message $name</p>
              <p><strong>Name: </strong> {$name} </p>
              <p><strong>Email Address: </strong> {$email} </p>
              <p><strong>Message: </strong> {$message} </p>";
   
  mail(EMAIL_ADDRESS ,"New Message", $body, $headers);
}


processFormInput();