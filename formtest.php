<?php
if (isset($_POST["user_name"])){
	$text = $_POST["user_name"];
	echo $text.'<br><br>'
	if(!empty)($text)){
		echo 'Submitted Text:<br>br<>';
		echo $text;
	}else{
		echo 'No text has been entered';
	}

}
?>
		
<html>
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
  </head>
  <body>
	<form action="formtest.php" method="post">
		<div>
			<label for="name">Name:</label>
			<input type="text" id="name" name="user_name" value="Your Name">
		</div>
		<div>
			<label for="mail">E-mail:</label>
			<input type="email" id="mail" name="user_mail">
		</div>
		<div>
			<label for="msg">Message:</label>
			<textarea id="msg" name="user_message"></textarea>
		</div>
		<div class="button">
			<button type="submit">Send your message</button>
		</div>
	</form>
    <p>This is my page</p>
  </body>
</html>