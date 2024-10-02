<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "zkoncepts1@gmail.com";
    $email_subject = "SAP MM Consultant";
 
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
    !isset($_POST['lname']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['city']) ||
        !isset($_POST['country']) ||
        !isset($_POST['experience'])) {
        //died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $fname = $_POST['fname']; // required
    $lname = $_POST['lname']; // required
    $email = $_POST['email']; // required
    $phone = $_POST['phone']; // required
    $city = $_POST['city']; // required
    $country = $_POST['country']; // required
    $experience = $_POST['experience']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(/*!preg_match($email_exp,$email)*/false) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(/*!preg_match($string_exp,$name)*/false) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 

  // if(strlen($comments) < 2) {
  //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  // }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($fname)."\n";
    $email_message .= "Last Name: ".clean_string($lname)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Current City Location: ".clean_string($city)."\n";
    $email_message .= "Current Country Location: ".clean_string($country)."\n";
    $email_message .= "Summary of Professional Experience: ".clean_string($experience)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
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