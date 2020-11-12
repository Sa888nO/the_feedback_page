<?php 

require_once 'func.php';

if(!empty(($_POST['login'])&&($_POST['feedback']))){
	save_new_feedback();
	header("Location: {$_SERVER['PHP_SELF']}"); die;

}

$messages = get_string_feedbacks();
$messages = split_string_feedbacks($messages);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>the feedback page</title>
</head>
<body>


<div class="div">
	<form action="" method="post">
		<input type="text" name="login" placeholder="login" class="login"><br><br>
		<textarea name="feedback" class="feedback" placeholder="feedback"></textarea><br><br>
		<button type="submit" class="button">Send</button>
	</form>
</div>

<hr>
 
<?php if(!empty($messages)): ?>
	<?php foreach ($messages as $message): ?>
		<?php $message = get_format_message($message); ?>
	<div class="conclusion">
		<b>Автор: <?=$message[0]?></b>
		<div class ="conclusionFB"><b>Фидбэк:</b> <?= nl2br($message[1])?></div>
	</div>
	<?php endforeach; ?>
<?php endif; ?>

</body>
</html>
