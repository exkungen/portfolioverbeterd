<?php
$firstname = $_POST['firstname'];

$other = $_POST['other'];

$email = $_POST['email'];
$to = 'menouer002@hotmail.nl';
$subject = 'Bericht van'. $email;
$msg = "Naam :$firstname\n" .
    "Email: $email\n".
    "Opmerkingen: $other\n";
$from = $_POST['email'];

mail($to, $subject, $msg, 'From: ' . $from);
echo '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>';