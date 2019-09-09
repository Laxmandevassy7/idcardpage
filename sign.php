
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

 if(isset($_GET['user']))
 {
	 $user = $_GET['user'];
	 echo $user;
 }
if(isset($_GET['pass']))
{	
	 $pass = $_GET['pass']; 
	 echo $pass;
}
  
  
  $sql="select username from home where username='$user' and password='$pass'";
 // echo $sql;
  $result= mysqli_query($con,$sql);
  $count = mysqli_num_rows($result);
  if($count==1)
  {
	  echo "success";
	    include 'C:/Users/KISHORE/Desktop/form1.html';
  }
  else{
	  echo "account does not exist";
	  include 'C:/Users/KISHORE/Desktop/signup.html';
    exit;
  }
  }
 
 //Close connection
mysqli_close($con);
?>
