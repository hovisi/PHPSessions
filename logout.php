<?php
/*
    Bella Hovis  
    CSCI 297 Scripting Languages   
    Assignment: Custom Project
    Description: When the user visits the Logout Page, the user will be told they have logged out successfully and
    have a link to return to the login page. This is where we wil end the session. 
*/

    //start the session
    session_start();
    
    //inform user that they logged out successfuly
    echo "Logout Successfully \n";

    //destroy/end session
    session_destroy();

    //link for Login Page
    echo "<a href='login.php'> Login Page </a>"; 

?>