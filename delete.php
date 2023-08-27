<?php
include "connect.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `sign-up` where id='$id'";
    $result = mysqli_query($con,$sql);

    if($result){
        echo "<script>alert('Record Deleted Successfully')</script>";
        header("location:display.php");
    }
    else{
        echo "error".mysqli_error($con);
    }
}
 

?>

