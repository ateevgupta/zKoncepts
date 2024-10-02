<?php
$to      = 'contact@zkoncepts.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'zkoncysg@zkoncepts.com',
    'Reply-To' => 'zkoncysg@zkoncepts.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

$data =  mail($to, $subject, $message, $headers);
echo $data;
if($data){
    echo "send";
}
else{
    echo "not send";
}
?>