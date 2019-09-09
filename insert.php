


 

 

<?php
$con=new mysqli('localhost','root','', 'test');


if (!$con)

  {

  die('Could not connect: ' . mysqli_error());

  }
 
//if(!empty($first_name))
//{
 
$sql = "INSERT INTO thala (name,fathername,idno,dob,schooling,boardingpoint,busno,address,aadharno) VALUES (?,?,?,?,?,?,?,?,?)";
//}
 
if($stmt = mysqli_prepare($con, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssssiss", $first_name,$fname,$iid,$dob,$schooling,$boardingpt,$bus,$address,$aadhar);
    
    // Set parameters
	
	if(isset($_GET['first_name']))
	{ $first_name = $_GET['first_name']; }
	if(isset($_GET['fname']))
	{ $fname = $_GET['fname']; }
    if(isset($_GET['iid']))
	{ $iid = $_GET['iid']; }
       if(isset($_GET['dob']))
	{ $dob = $_GET['dob']; }
 if(isset($_GET['schooling']))
	{ $schooling = $_GET['schooling']; }
 if(isset($_GET['boardingpt']))
	{ $boardingpt = $_GET['boardingpt']; }
 if(isset($_GET['bus']))
	{ $bus = $_GET['bus']; }
if(isset($_GET['address']))
	{ $address = $_GET['address']; }
if(isset($_GET['aadhar']))
	{ $aadhar = $_GET['aadhar']; }

   
    echo $first_name ;
	echo $iid;
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo "Records inserted successfully.";
		include 'C:/Users/KISHORE/Desktop/emailform.html';
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($con);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($con);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($con);
?>

