<?php
	$email  = $_POST["emailInput"];
	$mysql = new mysqli('localhost', 'root', '', 'submittedEmails');
	$validEmail = filter_var($email, FILTER_VALIDATE_EMAIL);
	$check  = $_POST["termsCheck"];
																									// DO THE SAME CHECKS LIKA JS DID 
	
		if (empty($email)) {
			header("Location: ../index.php?email=empty");
			exit();
		}elseif (!$validEmail) {
			header("Location: ../index.php?email=invalid");
				exit();
		}
		elseif (preg_match('/\.co$/',$email)) {
			header("Location: ../index.php?email=illegal");
			exit();
		}
		elseif (!isset($check)){
			header("Location: ../index.php?email=check");
			exit();
		}
		else{
			$mysql -> query("INSERT INTO `Emails` (`Email`) VALUES ('$email')");
				$mysql -> close();
				header("Location: ../index.php?email=success");
				exit();
		}	
?>