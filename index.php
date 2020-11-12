<?php 

require_once 'func.php';

if(!empty(($_POST['login'])&&($_POST['feedback']))){
	save_new_feedback();
	header("Location: {$_SERVER['PHP_SELF']}"); die;

}

$massages = g_a_f();
$massages = s_a($messages);
echo print_r($messages);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>the feed back page</title>
</head>
<body>


<div class="div">
	<form action="" method="post">
		<input type="text" name="login" placeholder="login" class="login"><br><br>
		<textarea name="feedback" class="feedback" placeholder="feedback"></textarea><br><br>
		<button type="submit" class="button">Send</button>
	</form>
</div>

</body>
</html>
