<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include 'connect.php';

if (isset($_POST["submit"])) {
    $name = $_POST["name"];

    // echo"$name";
    $email = $_POST["email"];
    // echo"$email";
    $password = $_POST["password"];
    // echo"$password";
    if (isset($_FILES['file'])) {
        if ($_FILES['file']['error'] > 0) {
            echo "Error:" . $_FILES['file']['error'];
        } else {
            $image = $_FILES['file'];
            print_r($image);
        }
    }

    // echo"$image";
};

// print_r($image);
echo "<br>";
echo ($name);
echo "<br>";
echo ($email);
echo "<br>";
echo ($password);
echo "<br>";


$imageFileName = $image['name'];
print_r($imageFileName);
echo "<br>";

$imageTmpDestination = $image['tmp_name'];
print_r($imageTmpDestination);
echo "<br>";

$imageFileError = $image['error'];
print_r($imageFileError);
echo "<br>";

$imageFileSize = $image['size'];
echo ($imageFileSize);
echo "<br>";

$fileNameSeparation = explode(".", $imageFileName);
print_r($fileNameSeparation);
echo "<br>";

$fileExtension = strtolower($fileNameSeparation[1]);
echo ($fileExtension) . "<br>";


$allowed_extensions = array('jpg', 'jpeg', 'pdf', 'gif', 'pdf');

if (in_array($fileExtension, $allowed_extensions)) {
    if ($imageFileError == 0) {
        $fileDestination = 'img_folder/' . $imageFileName;
        move_uploaded_file($imageTmpDestination, $fileDestination);
        $sql = "insert into `sign-up`(`name`,`email`,`password`,`image`)values('$name','$email','$password','$fileDestination')";

        $result = mysqli_query($con, $sql);

        if ($result) {
            echo "<div class='alert alert-success' role='alert'><strong>Success</strong>Data inserted successfully.</div>";
            header("location:display.php");
        } else {
            die(mysqli_error($con));
        }
    } else {
        echo "your file has error";
    }
} else {
    echo "file type not allowed.";
}


?>

