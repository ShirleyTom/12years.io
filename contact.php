
<?php

if($_POST["submit"]) {
    $recipient="shirleytom45@gmail.com";
    $sender=$_POST["senderEmail"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    mail($recipient, $subject, $message, "From: <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html>
<link rel = "stylesheet" href = "contact.css">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
<script src="contact.js"></script>
<script>
</script>
<head>
<center><title>12 years</title></center>
<center><h2>Contact</h2></center>
</head>
<center><body style = "background-color:#f0f2f7ff" text-align = "center">
<?=$thankYou ?>
<form method="post" action="contact.php">
  <input type="email" name='senderEmail' size="35" style="box-shadow: 7px 7px 10px grey" placeholder="email">
  <p></p>
  <input type="text" name='subject' size="35" style="box-shadow: 7px 7px 10px grey" placeholder="subject">
  <p></p>
  <textarea name='message' rows="10" cols="35" style="box-shadow: 7px 7px 10px grey" placeholder="text"></textarea>
  <p></p>
  <input type="button" id="submit" value="submit">
</form>
</body></center>
</html>
