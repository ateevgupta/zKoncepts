<?php
	print_r($_POST);
	if(isset($_POST['submit']))
	{
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$email = $_POST['email'];
		$number = $_POST['phone'];
		$currentcitylocation = $_POST['city'];
		$currentcountrylocation = $_POST['country'];
		$experience = $_POST['experience'];
		/*$query = "INSERT INTO teacher (firstname,lastname,email,number,currentcitylocation,currentcountrylocation,experience) 
		VALUES ('$firstname','$lastname','$email','$number','$currentcitylocation','$currentcountrylocation','$experience')";
		
		include("conn.php");
		if(mysqli_query($conn,$query))
		{
			header("location:index.html");
		}
		else
		{
			echo "error".mysqli_error($conn);
		}
		*/
		$to = "rohitpat1998@gmail.com";
		$subject = "time pass";
		$txt = "hello rohit ";
		$headers = "From: akshatgupta2010@gmail.com"."\r\n".CC: "";
		$data = mail($to,$subject,$txt,$headers);
		if($data){
			echo "mail send";
		}
		else{
			echo"not send";
		}
	}
?>
