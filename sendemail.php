

<?php
$con=new mysqli('localhost','root','', 'test');


if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
  else
  {
	  echo "kishore";
  }
  if ( $con ) {

 if(isset($_GET['dep']))
	{ $dep = $_GET['dep']; 
       echo $dep;}
if(isset($_GET['sub']))
{	
	 $sub = $_GET['sub']; 
	 
}
if(isset($_GET['message']))
{	
	 $message = $_GET['message']; 
	 
}

  $res="select mailid from mail where  dept='$dep'";
   $result= mysqli_query($con,$res); 
  $count = mysqli_num_rows($result);
 
 
  }
  if($count==1)
  {
  include 'test.php';
   $row = mysqli_fetch_assoc($result); 
      $email="{$row['mailid']}";
	  echo $email;
$to_mail="$email";
$mail_content="$sub";
$mail_subject="$message";
 send_mqil_using_php_mailer($to_mail,$mail_content,$mail_subject)
;
echo "mail sent successfully";
  }
  else
  {
	  echo "reenter please";
  }
 
// Close connection
mysqli_close($con);
?>
