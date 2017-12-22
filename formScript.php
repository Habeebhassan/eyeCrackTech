 <?php
 [Date]
 if(isset($_POST['submit']))
 {
   //this should not be accessed directly, need to submit form
   echo "error; you need to submit the form!";
 }
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 //$tel = $_POST['phone'];
// $Sysmodel = $_POST['model'];
 $message = $_POST['message'];
 $ThankYouPage = "thank_you.html";
 
 date.timezone = 'Africa/Lagos'

 //validate first
 if(empty($name)||empty($visitor_email)||empty($message))

 {
   echo "Please the complete the form";
   exit;
 }
  
 $email_from = 'bidehassan@gmail.com';
 $email_subject = 'New Form Submission';
 $email_body = "You have received a new message from $name.\n'.
             email address: $visitor_email\n'.
             message: $message".;
 
 $To = 'bidehassan@gmail.com';
 //$header = 'From: $email_from \r\n';
 
 mail($To,$email_subject,$email_body);

 //header ('Location: '$ThankYouPage');
 ?>