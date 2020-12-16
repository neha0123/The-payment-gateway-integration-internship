<?php

 $name=$_POST['name'];
 $visitor_email=$_POST['email'];
 $message=$_POST['msg']; 
 $phone=$_POST['phone'];


//check input fields 
$email_from='garg22neha1999@gmail.com';
$email_subject="New form Submission";
$email_body="User Name:$name.\n".
   "User Email:$visitor_email.\n". 
   "User Message:$message.\n";
   $to="garg22neha1999@gmail.com";
   $headers="From: $email_from \r\n";
   $headers .="Reply-To: $visitor_email\r\n";
   mail($to,$email_subject,$email_body,$headers);
   

echo "<script type='text/javascript'>alert('Your message sent successfully');
window.history.go(-1);
</script>";
?>