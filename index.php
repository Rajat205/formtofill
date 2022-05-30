<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";



// create connection
$conn= new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn === false)
{
die("Connection failed: " . mysqli_connect_error());
}
$First_name = $_REQUEST['First_name'];
$Last_name = $_REQUEST['Last_name'];
$Gender = $_REQUEST['Gender'];
$Phone = $_REQUEST['Phone'];
$Email = $_REQUEST['Email'];
$Branch = $_REQUEST['Branch'];

$sql = "INSERT INTO FORM3 VALUES('$First_name','$Last_name','$Gender','$Phone','$Email','$Branch')";

if (mysqli_query($conn, $sql)){
	echo "<h3>data stored in a database successfully."
            . " Please browse your localhost php my admin"
            . " to view the updated data</h3>";
			
	} 
	else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }			
	mysqli_close($conn);
?>