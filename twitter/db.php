<?php
/* conect */
$con = mysqli_connect("localhost", "root", "", "register");

if (!$con) {
  die("Not connected");
}
