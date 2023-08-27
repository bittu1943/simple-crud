<?php
include "connect.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">User-Data</h1>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">image</th>
                    <th scope="col">operations</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from `sign-up`";
                $result = mysqli_query($con, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $image = $row['image'];

                        echo "<tr>
                            <th scope='row'>.$id.</th>
                            <td>.$name.</td>
                            <td>.$email.</td>
                            <td><img src='$image' style='width:100px'></td>
                            <td>
                                <button class='btn btn-primary'><a href='update.php?updateid=$id' class='text-light'>UPDATE</a></button>
                                <button class='btn btn-danger'><a href='delete.php?deleteid=$id' class='text-light'>DELETE</a></button>
                            </td>
                        </tr>";
                    }
                }


                ?>



            </tbody>
        </table>
    </div>


</body>

</html>