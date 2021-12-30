<?php
session_start();
include("dbconnection.php");
$fullname=$_POST['name'];
$address=$_POST['address'];
$mobileno=$_POST['mobileno'];
$custid=$_POST['custid'];


$query="INSERT INTO customerinfo(custid,fullname,address,mobileno) VALUES('$custid','$fullname','$address','$mobileno');";
$result=mysqli_query($con,$query);
if($result){
    echo'<script> alert("the customer has been successfully registered \n\nTHIS IS AN EXAMPLE OF INSERT COMMAND \n \nthe query executed is :INSERT statement  \n the table affected:customerinfo"); </script>';
    
 echo'<script>window.location.href="CustEnt.html"</script>';
}
else{
    echo"unsuccessful";

}

?>