<?php
//* edit request *//
require_once 'db.php';
$post_id =  $_POST['post_id'];
$post_text = $_POST['post_text'];

mysqli_query($con, "UPDATE `posts` SET `post_text` = '$post_text' WHERE `posts`.`post_id` = '$post_id' ");
header('Location:http://localhost/index2.php');
