<?php
    include "connect.php";
    $id = $_GET['updateid'];
    $sql = "select * from `sign-up` where id=$id";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];
    $password=$row['password'];
    $image=$row['image'];

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $image=$_FILES['image']['name'];

        $sql="update `sign-up` set id=$id,name='$name',email='$email',password='$password',
        image='$image' where id=$id";

        $result=mysqli_query($con,$sql);
        if($result){
            echo "<script>alert('Data Updated Successfully')</script>";
        } 
        else{
            echo"data could not be updated.";
        }
        
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form</title>
</head>
<body>

    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Enter your name:</label>
                <input type="text" class="form-control" placeholder="Enter your name:" name="name" autocomplete="off" value=<?php echo $name?>>
            </div>

            <div class="form-group">
                <label>email:</label>
                <input type="email" class="form-control" placeholder="Enter your email:" name="email" value=<?php echo $email?>>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" placeholder="Enter your password:" name="password" value=<?php echo $password?>>
            </div>

            <div class="form-group">
                <label>image:</label>
                <input type="file" class="form-control" placeholder="Enter your image:" name="image" value=<?php echo $image?>>
            </div>

            <button type="input" class="btn btn-primary" name="submit">Update</button>
        </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
