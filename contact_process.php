<?php

  // This check relies on there being an <input> with the name 'submit' in your form.
  // i.e. <input type="submit" name="submit">Send Form</input>
  if (isset($_POST['submit'])) {

    $to = "krystianblaszczyk05@gmail.com"; // Update with email.
    
    // Create new fields here for each field in your form.
    // Ideally you would want some validation here too.
    $name = $_POST['name'];
    $company = $_POST['company'];
    $from = $_POST['from'];
    $mobilenr = $_POST['mobilenr'];

    $subject = "New message from" . ": ". $name;

    $headers = 'From: ' . $from;
   
    $message = "Name: $name\nCompany: $company\nMail: $from\nPhone number: $mobilenr\n";
   
    mail($to, $subject, $message, $headers);
    echo "Mail sent. We will get back to you shortly";
  } else {
    echo "Form failed to send. Please contact us directly.";
  }

?>