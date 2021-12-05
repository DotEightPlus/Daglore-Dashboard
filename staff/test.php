<?php 
include("functions/init.php");

$sql= "SELECT * FROM `result` WHERE `admno` = '$data' AND `term` = '$term' AND `ses` = '$ses'";
 $result_set = query($sql);
 echo row_count($result_set);
 