<?php
//echo phpinfo();

$_link = mysqli_connect("mysql","drupal","drupal","drupal");

if(!$_link)
 { echo "Did not connect";
   echo mysqli_connect_errno();
 }else{
   echo "Connected";
 }
echo "Host information: " . mysqli_get_host_info($_link) . PHP_EOL;

?>
