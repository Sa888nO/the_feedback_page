<?php

function save_new_feedback(){
	$new_feedback = $_POST['login'].': '.$_POST['feedback']."\n***\n";
	file_put_contents('data/logFeed.txt', $new_feedback, FILE_APPEND);
	unset($_POST);
}

function g_a_f(){
	return file_get_contents('data/logFeed.txt');
}

function s_a($m){
	$m = explode("\n***\n", $m);
	return array_reverse($m);
}

?>