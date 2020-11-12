<?php

function save_new_feedback(){
	$new_feedback = $_POST['login'].':'.$_POST['feedback']."\n***\n";
	file_put_contents('data/logFeed.txt', $new_feedback, FILE_APPEND);
	unset($_POST);
}

function get_string_feedbacks(){
	return file_get_contents('data/logFeed.txt');
}

function split_string_feedbacks($m){
	$m = explode("\n***\n", $m);
	array_pop($m);
	return array_reverse($m);
}

function get_format_message($message){
	return explode(':', $message);
}

?>