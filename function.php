<?php  
function addUser($conn, $username, $password) {
	$sql = "SELECT * FROM useraccss WHERE username=?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$username]);

	if($stmt->rowCount()==0) {
		$sql = "INSERT INTO useraccss (username,password) VALUES (?,?)";
		$stmt = $conn->prepare($sql);
		return $stmt->execute([$username, $password]);
	}
}

function login($conn, $username, $password) {
	$query = "SELECT * FROM useraccss WHERE username=?";
	$stmt = $conn->prepare($query);
	$stmt->execute([$username]);

	if($stmt->rowCount() == 1) {
		$row = $stmt->fetch();
		$_SESSION['userInfo'] = $row;
		$uid = $row['id'];
		$uname = $row['username'];
		$passHash = $row['password'];

		// validate password 
		if(password_verify($password, $passHash)) {
			$_SESSION['id'] = $uid;
			$_SESSION['username'] = $uname;
			$_SESSION['userLoginStatus'] = 1;
			return true;
		}
		else {
			return false;
		}
	}
}

?>