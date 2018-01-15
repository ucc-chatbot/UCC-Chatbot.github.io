<?php
require('config.php');

	
	if (isset($_POST['txtRegFname']) && isset($_POST['txtRegLname']) && isset($_POST['txtRegEmail']) && isset($_POST['txtRegPhoneNum'])	&& isset($_POST['txtRegPassword'])	){


        $firstName = $_POST['txtRegLname'];
		$lastName = $_POST['txtRegLname'];
		$email = $_POST['txtRegEmail'];
		$phoneNum = $_POST['txtRegPhoneNum'];
		$studentNum = $_POST['txtRegStudentNum'];
		$password = md5($_POST['txtRegPassword']);
 
        $query = "INSERT INTO `student_accounts` (first_name, last_name,email_address,phone_number,student_number,password) VALUES ('$firstName', '$lastName', '$email', '$phoneNum', '$studentNum', '$password')";

        $result = mysqli_query($con, $query);
        	if($result){
        		echo'Registration Successful' ;
        		echo "<br/>";	
        		echo '<a href="javascript:history.back()">Back</a>';
        	}
        	else{
        		echo'not success';
        	}
    }


?>