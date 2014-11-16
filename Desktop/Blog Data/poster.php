<?php
require_once("wp-load.php");

$title = $_POST['title'];
$body = $_POST['body'];



global $user_ID;
$new_post = array(
'post_title' => $title,
'post_content' => $body,
'post_status' => 'publish',
'post_author' => "admin",
'post_type' => 'post',
'tags_input' => array("tags"),

);


$post_id = wp_insert_post($new_post); 

?>
