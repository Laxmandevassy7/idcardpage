

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

 if(isset($_POST['user']))
 {
	 $user = $_POST['user'];
	 echo $user;
 }
if(isset($_POST['pass']))
{	
	 $pass = $_POST['pass']; 
	 echo $pass;
}
  $res="select username from home where  username='$user'";
   $result= mysqli_query($con,$res);
  $count = mysqli_num_rows($result);
  }
  if($count==0)
  {
  $sql="insert into home(username,password) values('$user','$pass')";
  mysqli_query($con,$sql); 
  include 'C:/Users/KISHORE/Desktop/form1.html';
  }
  else
  {
	  echo "already registered";
  }
 
// Close connection
mysqli_close($con);
?>
