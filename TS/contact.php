<?php
if ($_POST["submit"]) {
	$recipient = "vanessaodawo@gmail.com";
	$subject = $_POST["subject"];
	$sender = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$mailBody = "Name: $sender\From: $email\n\n$message";
	mail($recipient, $subject, $mailBody);

	#$receipt = "<p> Thank you $name! Your message has been sent.</p>";
}
?>