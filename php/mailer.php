<?php
/* Set e-mail recipient */
$myemail = "23joeli@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['inputName'], "Your Name");
$email = check_input($_POST['inputEmail'], "Your E-mail Address");
$subject = check_input($_POST['inputSubject'], "Message Subject");
$message = check_input($_POST['inputMessage'], "Your Message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
show_error("Invalid e-mail address");
}
/* Let's prepare the message for the e-mail */

$subject = "68a | New Enquiry";

$message = "
Someone has sent you a message using your contact form:

Name: $name
Email: $email
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: ../index.php?status=thanks#section6');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
header('Location: ../index.php?status=wrong#section6');


exit();
}
?>