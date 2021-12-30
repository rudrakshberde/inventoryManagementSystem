<?php

include("dbconnection.php");
$productname=$_POST['prodname'];
$batchno=$_POST['batchno'];



$query="DELETE FROM productinfo WHERE productname='$productname' AND batchno='$batchno';";
$result=mysqli_query($con,$query);
if($result){
    echo'<script> alert("the product  has been successfully removed from the database \n\nTHIS IS AN EXAMPLE OF DELETE COMMAND \n \nthe query executed is :DELETE statement  \n the table affected:customerinfo"); </script>';

 echo'<script>window.location.href="Stock Out.html"</script>';
}
else{
    echo"unsuccessful";

}

?>
