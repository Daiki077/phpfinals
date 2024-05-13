<?php  
session_start();
require_once('dconfig.php');
require_once('function.php');

if (isset($_POST['rgsubmit'])) {
	$username = $_POST['User'];
	$password = password_hash($_POST['Pass'], PASSWORD_DEFAULT);

	if(empty($username) || empty($password)) {
		echo '<script> 
		alert("The input field is empty!");
		window.location.href = "register.php";
		</script>';
	}
	
	else {

		if(addUser($conn, $username, $password)) {
			header('Location: login.php');
		}else {
			header('Location: register.php');
		}

	}
}

if (isset($_POST['lgsubmit'])) {
	$username = $_POST['User'];
	$password = $_POST['Pass'];

	if(empty($username) && empty($password)) {
		echo "<script>
		alert('Input fields are empty!');
		window.location.href='login.php'
		</script>";
	} 
	else {

		if(login($conn, $username, $password)) {
			header('Location: second.php');
		}else {
			header('Location: login.php');
		}
	}
	
}
?>