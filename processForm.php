<?php
/*
  RESOURCES
  http://code.tutsplus.com/tutorials/build-a-neat-html5-powered-contact-form--net-20426
  http://code.tutsplus.com/tutorials/sanitize-and-validate-data-with-php-filters--net-2595
  http://buildinternet.com/2008/12/how-to-validate-a-form-using-php-part-2-streamline-using-arrays/
  https://bootstrapbay.com/blog/working-bootstrap-contact-form/
 */

// REDEFINE BASE_URL TO WHATEVER THE LOCAL URL IS
define('BASE_URL', 'http://www.speak-ease.com/');
define('SUCCESS', BASE_URL . 'contactConfirm.php');
define('FAILURE', BASE_URL .'contactFailure.php');
define('EMAIL_ADDRESS', 'maria@speak-ease.com');

// PROCESS & VALIDATE

function processFormInput()
{
  if ( isset($_POST) ) {
    $name = '';
    $email = '';
    $message = '';

    if ( isset($_POST['username']) ) {
      $name = filter_var( $_POST['username'], FILTER_SANITIZE_STRING );
    }
    
    if ( isset($_POST['email']) ) {
      $email = filter_var( $_POST['email'], FILTER_SANITIZE_STRING );
    }
    
    if ( isset($_POST['message']) ) {
      $message = filter_var( $_POST['message'], FILTER_SANITIZE_STRING );
    }

    if ($name && $email && $message) {
      sendEmail($name, $email, $message);
      header('Location: ' . SUCCESS);
    } else {
      header('Location: ' . FAILURE);
    }
  } else {
    header('Location: ' . FAILURE);
  }
}


function sendEmail($name, $email, $message)
{
  //send email if all is ok
  $headers = "From: info@speak-ease.com" . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
  $body = "<p>You have recieved a new message from  <strong>$name</strong></p>
              <p><strong>Name: </strong> {$name} </p>
              <p><strong>Email Address: </strong> {$email} </p>
              <p><strong>Message: </strong> {$message} </p>";
   
  mail(EMAIL_ADDRESS ,"New Message From $name", $body, $headers);
}


processFormInput();