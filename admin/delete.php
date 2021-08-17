<?php
$conn=new mysqli("localhost","root","","mywebsite");
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $result=$conn->query("DELETE FROM `product` WHERE product_id='$id'");
    if($result){
        echo "<script>alert('Delete Success !!')</script>";
        header("location:admin.php");
    }
    
}


?>