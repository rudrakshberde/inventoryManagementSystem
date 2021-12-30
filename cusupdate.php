<?php
session_start();
include("dbconnection.php");
$upoption=$_POST['options'];
$newvalue=$_POST['newval'];
$codeno=$_POST['code'];

$query="UPDATE customerinfo SET $upoption='$newvalue' WHERE custid='$codeno';";
$result=mysqli_query($con,$query);
if($result){
    echo'<script> alert("the customer has been successfully updated \n\nTHIS IS AN EXAMPLE OF UPDATE COMMAND \n \nthe query executed is :UPDATE statement  \n the table affected:customerinfo"); </script>';
    
    echo'<script>window.location.href="customerdet.html"</script>';
   }
else{
    echo"unsuccessful";

}

?>