<?php
$dbconn = mysqli_connect("localhost","root","","ebs_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  date_default_timezone_set("Africa/Harare"); 
?>
