<?php
include("functions/init.php");
	$sql = "SELECT * FROM students";
	$res = query($sql);
	while($row = mysqli_fetch_array($res)) {

		$x = $row['Admission No.'];

	}
	
	
	$e = "$x" + 1;

	echo $e;