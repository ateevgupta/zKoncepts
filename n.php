<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    //$email_to = "akshatgupta2010@gmail.com";contact@zkoncepts.com
$email_from="contact@zkoncepts.com";
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
    if(!isset($_POST['name']) ||
        
        !isset($_POST['email']) ||
        !isset($_POST['number']) ||
		!isset($_POST['country']) ||
		!isset($_POST['company_name']) ||
        !isset($_POST['comments'])) {
        //died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    
    $email = $_POST['email']; // required
    $number = $_POST['number']; // not required
	$country = $_POST['country']; // required
	$company_name = $_POST['company_name']; // required
    $comments = $_POST['comments']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(/*!preg_match($email_exp,$email)*/false) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(/*!preg_match($string_exp,$name)*/false) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(/*!preg_match($string_exp,$country)*/false) {
    $error_message .= 'The Country you entered does not appear to be valid.<br />';
  }
 
 if(/*!preg_match($string_exp,$company_name)*/false) {
    $error_message .= 'The Company name you entered does not appear to be valid.<br />';
  }

  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telephone: ".clean_string($number)."\n";
	$email_message .= "Country: ".clean_string($country)."\n";
	$email_message .= "Company Name: ".clean_string($company_name)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
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
 
<!-- include your own success html here -->
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

<button onclick="goBack()">Go Back</button>


</body>
</html>
<?php
 
}
?>