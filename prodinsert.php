<?php

include("dbconnection.php");
$prodname=$_POST['prodname'];
$batchno=$_POST['batchno'];
$price=$_POST['price'];
$mfgdate=date('y/m/d',strtotime($_POST['mfgdate']));
$expdate=date('y/m/d',strtotime($_POST['expdate']));

$query="INSERT INTO productinfo(productname,batchno,price,manufacturedate,expirydate) VALUES('$prodname','$batchno','$price','$mfgdate','$expdate');";
$result=mysqli_query($con,$query);
if($result){
    echo'<script> alert("the product has been successfully added \n\nTHIS IS AN EXAMPLE OF INSERT COMMAND \n \nthe query executed is :INSERT statement  \n the table affected:productinfo"); </script>';
    
    echo'<script>window.location.href="Stock In.html"</script>';
}
else{
    echo"unsuccessful";

}

?>