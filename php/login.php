<?php 
require("config.php");

	if (isset($_POST['txtEmail']) && isset($_POST['txtPassword'])){
		
		$email = $_POST['txtEmail'];
		$password = $_POST['txtPassword'];

		$query = "SELECT * FROM 'student_accounts' WHERE email_address='$email' AND password='$password' ";
		$result = mysqli_query($con,$query);
		$rows = mysqli_num_rows($result);
		if($rows==1){
	    		echo'Login Successfully' ;
        		echo "<br/>";	
        		echo '<a href="C:\xampp\htdocs\UCCSCBG\chatbox.html">Continue</a>';
         }else{
		echo "Username/password is incorrect";
		}
	}
?>