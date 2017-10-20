<?php  
	$errors =  array();
	// database connection
	$db = mysqli_connect('localhost', 'root', '', 'ppc_site');
	if (isset($_POST['contact'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		if (empty($name) || (empty($email)) || (empty($message))) {
			array_push($errors, "All the fields are compulsory");
		}
		//if there is no error
		if (count($errors) == 0) {
			$sql = "INSERT INTO contact(name,email,message) VALUES('$name','$email','$message')";
			mysqli_query($db, $sql);
		}
	}

	if(isset($_POST["contact"])){
		$ToEmail = "ppcconsultants2014@gmail.com";
		$EmailSubject = "site contact form";
		$mailheader = "From: ".$_POST['email']."\r\n";
		$mailheader = "Reply-To:".$_POST['email']."\r\n";
		$mailheader = "Content-type: text/html; charset=iso-8859-1\r\n";
		$MESSAGE_BODY = "Name: ".$_POST['name'].""; 
    	$MESSAGE_BODY .= "Email: ".$_POST['email'].""; 
    	$MESSAGE_BODY .= "Message: ".nl2br($_POST['message']).""; 
		if(($_POST['name'] != "") && ($_POST['email'] != "") && ($_POST['message'] != "")){

			mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die("Failure");

			echo "Message Sent Successfully...";
		}
	}

?>