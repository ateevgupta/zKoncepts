<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    //$email_to = "akshatgupta2010@gmail.com";contact@zkoncepts.com
$email_from="SAP ABAP Consultant";
//$email_to="gopalatkumar@gmail.com";
    $email_subject = "Response from contact form from website";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
    // validation expected data exists
    if(!isset($_POST['fname']) ||
     if(!isset($_POST['lname'])||   
        !isset($_POST['email']) ||
        !isset($_POST['number']) ||
		!isset($_POST['city']) ||
		!isset($_POST['country']) ||
        !isset($_POST['experience'])) {
        //died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $fname  = $_POST['fname']; // required
    $lname  = $_POST['lname']; // required
    $email = $_POST['email']; // required
    $number = $_POST['number']; // not required
	$city = $_POST['city']; // required
	$country = $_POST['country']; // required
    $experience = $_POST['experience']; // required
 
   $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(/*!preg_match($email_exp,$email)*/false) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(/*!preg_match($string_exp,$fname)*/false) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
 if(/*!preg_match($string_exp,$lname)*/false) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(/*!preg_match($string_exp,$country)*/false) {
    $error_message .= 'The Country you entered does not appear to be valid.<br />';
  }
 
   if(/*!preg_match($string_exp,$city)*/false) {
    $error_message .= 'The City you entered does not appear to be valid.<br />';
  }
   if(/*!preg_match($string_exp,$experience)*/false) {
    $error_message .= 'The Country you entered does not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($firstname)."\n";
    $email_message .= "Last Name: ".clean_string($lastname)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($number)."\n";
	$email_message .= "Current City Location: ".clean_string($city)."\n";
	$email_message .= "Current Country Location: ".clean_string($country)."\n";
    $email_message .= "Summary of Professional Experience: ".clean_string($experience)."\n";
 
 $email_to = "akshatgupta2010@gmail.com";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
$flag=@mail($email_to, $email_subject, $email_message, $headers); 
if($flag == true)
{
//echo "Message send successful";
//echo $email . "<Br>";
//echo $email_subject . "<Br>";
//echo $email . "<Br>";
//echo $email_message . "<Br>";
} 
else
{
echo "error";
}
?>
 
<script type="text/javascript">
// Popup window code
function newPopup(url) {
	popupWindow = window.open(zkoncepts.com);
}
</script>
<html>
<head>
<script>
function goBack() {
  window.history.back()
}
</script>
</head>
<body>
<p>Thanks for contacting us.We will reach you soon.</p>

<!-- <button onclick="goBack()">Go Back</button> -->


</body>
</html>
<?php
 
}
?>