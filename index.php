<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"   />
    <link rel="stylesheet" href="style.css">
    <title>crud-form</title>
</head>
<div class="container">
    <div class="row">
        <div class="col-12">

            <nav class="navbar navbar-light bg-success">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <i class="fa-brands fa-facebook"></i> facebook
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>
<form action="insert.php" method="post" enctype="multipart/form-data">
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 d-flex justify-content-center">
                <h3 class="text-center">Sign-Up</h3>
            </div>
        </div>       
        
    </div>
    <div class="container mt-2">
       

        <div class="row-3 d-flex mt-2 justify-content-center">
            <div class="col-md-6 d-flex justify-content-center">
                <label>Enter your name:</label>
                <input name="name" placeholder="enter your name" required>
            </div><br>
        </div>

        
        <div class="row d-flex mt-2 justify-content-center">
            
            <div class="col-md-6 d-flex justify-content-center">
                <label>Enter your email:</label>
                <input type="email" name="email" placeholder="enter your email" required>
            </div>
        </div>


        <div class="row d-flex mt-2 justify-content-center">
            
            <div class="col-md-6 d-flex justify-content-center">
                <label>Create Password:</label>
                <input type="password" name="password" placeholder="create password" required>
            </div>
        </div>

        
        <div class="row d-flex mt-2 justify-content-center">
            
            <div class="col-md-6 d-flex justify-content-center offset-1">
                <label>Enter profile picture:</label>
                <input type="file" name="file" required>
            </div>
        </div>


        <div class="row d-flex mt-2 justify-content-center">
            
            <div class="col-md-6 text-center">
                <input  type="submit" name="submit" class="btn btn-primary" value="sign-up">
                
            </div>
        </div>
      

           
        
    </div>
</form>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
