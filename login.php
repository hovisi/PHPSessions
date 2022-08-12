<?php
/*
    Bella Hovis  
    CSCI 297 Scripting Languages   
    Assignment: Custom Project
    Description: When the user visits the Login Page, the user will eneter their username and password. 
    If entered correctly, they will be directed to the Class Listings page. 
    This is where we wil start the session. 
*/
?>


<html>
    <body>

        <h1> Please Login To Your Account </h1>

        <!-- create the form where the user can loggin -->
        <form action="https://deltona.birdnest.org/~acc.hovisi2/custom-project-hovisi/login.php" method="POST">
            <label>Username: <input type="text" name="username"></label><br>
            <label>Password: <input type="text" name="password"></label><br>
            <button type="login" name="login">Login</button>
        </form>

    </body>
</html>

<?php
    //start the session
    session_start();
   

    //if user clicked loggin see if information is correct
   if(isset($_POST['login']))
    {
        $user = $_POST['username'];
        $password = $_POST['password'];

        //check to see if this is the correct username and password
        if($user == "student" && $password == "Winthrop21")
        {
            //properly logged in got to class listings page
            $_SESSION['use']=$user;
            header("Location:classListings.php");
        }
        else
        {
          echo "Incorrect Username or Password. Please try again.";
        }
    }
?>