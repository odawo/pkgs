<?php 
if ($_POST["submit"]) {
	$recipient = "vanessaodawo@gmail.com";
	$subject = $_POST["subject"];
	$sender = $_POST["name"];
	$location = $_POST["location"];
	$date = $_POST["date"];
	$time = $_POST["time"];
	$message = $_POST["message"];

	$mailBody = "Name: $sender\nLocation: $location\nDate: $date\nTime: $time\n\n$message";
	mail($recipient, $subject, $mailBody);

	#$receipt = "<p> Thank you $name! Your message has been sent.</p>";
}
?>