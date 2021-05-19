	<?php

/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}



function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
}

function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div class="alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}


/************************validate user login functions**********/

function validate_studlogin() {

	$errors = [];

	

	if($_SERVER['REQUEST_METHOD'] == "POST") {

			$admission       = clean($_POST['adm']);
			



			if(empty($admission)) {

				$errors[] = "Admission No. cannot be empty";
			}


			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(login_user($admission)) {
					$_SESSION['AdminID'] = $admission;
					header("location: ./");

				} else {

					echo validation_errors("Invalid Admission No.");
				}
			} 

		}

} //function


/************************ user login functions**********/

function login_user($admission) {

$sql = "SELECT * FROM `students` WHERE `AdminID` = '".escape($admission)."'";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user_password = $row['AdminID'];

	if($admission == $user_password) {

		$_SESSION['AdminID'] = $admission;

		return true;
	} else {
		return false;
	}

	return true;
} else {

	return false;
}

} //end of function 


/****result fst*****/

function result() {

if($_SERVER['REQUEST_METHOD'] == "POST") {	
	$r = $_POST['class'];
$sql = "SELECT * FROM firstterm WHERE `class` = '$r' AND `admno` = '".$_SESSION["AdminID"]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
$x = $row['result'];
redirect("../staff/upload/results/$x");
return true;
		} else {
			echo validation_errors("Result for that class hasn`t been uploaded yet! Kindly check back later!");
		}
	}
}

/**********************result snd***************/

function result_snd() {

if($_SERVER['REQUEST_METHOD'] == "POST") {	
	$r = $_POST['class'];
$sql = "SELECT * FROM sndterm WHERE `class` = '$r' AND `admno` = '".$_SESSION["AdminID"]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
$x = $row['result'];
redirect("../staff/upload/results/$x");
return true;
		} else {
			echo validation_errors("Result for that class hasn`t been uploaded yet! Kindly check back later!");
		}
	}
}

/*******************logged 2********************/
function result_trd() {

if($_SERVER['REQUEST_METHOD'] == "POST") {	
	$r = $_POST['class'];
$sql = "SELECT * FROM thrdterm WHERE `class` = '$r' AND `admno` = '".$_SESSION["AdminID"]."'";
$result = query($sql);
if(row_count($result) == 1) {
$row = mysqli_fetch_array($result);
$x = $row['result'];
redirect("../staff/upload/results/$x");
return true;
		} else {
			echo validation_errors("Result for that class hasn`t been uploaded yet! Kindly check back later!");
		}
	}
}


/************************validate user login functions**********/

function validate_user_login() {

	$errors = [];

	

	if(isset($_POST['submit'])) {

			$password   	 = md5($_POST['password']);
			$idd  	 		 = $_POST['iddler'];

			if(!empty($errors)) {

				foreach ($errors as $error) {
			
	                echo validation_errors($error); 

				}

			} else {

				if(log_user($password)) {
					$_SESSION['secured'] = $password;
					header("location: ./seen?id=$idd");

				} else {

					echo validation_errors("Wrong Password");
				}
			} 

		}

} //function


/************************ user login functions**********/

function log_user($password) {

$sql = "SELECT `identifier` FROM `security`";
$result = query($sql);
if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user_password = $row['identifier'];

	if($password == $user_password) {

		$_SESSION['secured'] = $password;

		return true;
	} else {
		return false;
	}

	return true;
} else {

	return false;
}

} //end of function 
?> 