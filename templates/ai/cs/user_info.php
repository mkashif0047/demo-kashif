<?php

$servername="localhost";
$username="root";
$password="";
$dbname="user_d_db";

$conn=new mysqli($servername,$username,$password,$dbname);


$Firstt_name = $_REQUEST["F_Name"];
$Lastt_name = $_REQUEST["L_Name"];
$CNIC= $_REQUEST["CNIC"];
$Phone_Number = $_REQUEST["Phone_Number"];
$Address = $_REQUEST["Address"];
$City = $_REQUEST["City"];
$Email = $_REQUEST["Email"];

$insert_sql="INSERT INTO user_d_tb(First_Name,Last_Name,CNIC,Phone_Number,Address,City,Email) VALUES('$Firstt_name','$Lastt_name','$CNIC','$Phone_Number','$Address','$City','$Email')";

if($conn->query($insert_sql)===TRUE)
{
    echo "Record Enter Successfully";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>
