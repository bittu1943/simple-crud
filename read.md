here i will try to connect my app with the database, 
save the user input in the database, 
user input can be text or image ,
follow the best practices and use dani-krossings guided project as your guide, 
sanitize the projects, use cookies and other things to make it as good as possible,
we will put this project on github,
we will make a 'form.php' file where we will get the user to input their data.
in the "connect.php" file, we will connect the form with the database, //done
the next target is to store the user data into our database,  
the next task will be to show the data to the website-owner,
and them make them able to create , read, update and delete the data by themselves,
the form to update the data will come in a modal,
we will make it a complete crud project, 

<!-- insert.php -->
in insert.php we will make sure that all the user data gets stored in our database;

<!-- how will this happen -->
we will store the user input into our variables,these variables will store all the data from all the users,with the help of these variables we will input the user data into our database,


<!-- inserting the image-->
1.we won't be inserting image in the database actually,we will be saving only the name of the image file in the database, but we will make sure that whenever the user inserts the image , we must be able to save it in our machine somewhere,

<!-- write the method for saving the image input of the user in your laptop -->
1.image is uploaded as type file by the users we can access those image file uploaded by the users with $_FILES superglobal.
2.important built-in functions used in the project;
    i.explode(): explode(a,b) function takes two arguments, and the function basically separates b from the a.
    ii.in_array():this is used to check if something exists in the array or not; the in_array(a,b) function takes two arguments and the function is used to find out if "a" exists in array "b" or not, if it does it returns "true" else "false".

    iii.$fileDestination = 'img_folder/'.$imageFileName;
    let's say that $imageFileName = sample.jpg;
    this will create, $fileDestination = img_folder/sample.jpg;
    this will become the path for the image file that we will receive from the user,
    iv.move_uploaded_file($imageTmpDestination,$fileDestination);

    =>the function "move_uploaded_file(a,b)" , it will accept two arguments  "a" and "b" and the function will move the file from directory a to b. 


    v.mysqli_fetch_assoc(a) => let's say that you have a data table "a", the function mysqli_fetch_assoc() fetches one row of data from the table "a",using while loop we can fetch all the data from the table.  

    vi. 


<!-- CRUD -->
<!-- here we will make a table to present the data that we have in the database to the website manager so that he can create, read ,update and delete the data from the database.-->





