<?php
/*
    Bella Hovis  
    CSCI 297 Scripting Languages   
    Assignment: Custom Project
    Description: When the user visits the Class Listings, the user will see all available classes, their description, their times, and their locations. 
    This inofrmation will be displayed using a tables. They can also logout of there account by clicking "Logout". If the "Logout"
    button is clicked they will be logged out and be directed to the logout page
*/ 

    //start the session
    session_start();

        // If session is not set then redirect to Login Page
       if(!isset($_SESSION['use'])) 
       {
           header("Location:login.php");  
       }
?>

<html>
   

    <body>
        <h1> Class Listings</h1>

        <!-- Style for the class listings table-->
        <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        table-layout: fixed ;
        width: 75%
        }

        h3 {text-align: center;}
        </style>

        <!--Create the class listings table-->
        <h3> Class Listings </h3>
        <table>
            <tr>
                <th> Name </th>
                <th> Description </th>
                <th> Time </th>
                <th> Location </th>
            </tr>
            <tr>
                <td> Math 201 </td>
                <td> Calculus 1 </td>
                <td> MWF 9:30-10:45 AM </td>
                <td> Owens 101 </td>
            </tr>
            <tr>
                <td> Math 261 </td>
                <td> Discrete Math </td>
                <td> TH 2:00-3:15 PM </td>
                <td> Owens 207 </td>
            </tr>
            <tr>
                <td> CSCI 460 </td>
                <td> Information and Security </td>
                <td> TH 3:30-4:45 PM </td>
                <td> Thurmand 306 </td>
            </tr>
            <tr>
                <td> CSCI 365 </td>
                <td> Machine Learning </td>
                <td> MW 3:30-4:45 PM </td>
                <td> Thurmand 308 </td>
            </tr>

            <tr>
                <td> CHEM 105 </td>
                <td> General  Chemistry</td>
                <td> MW 11:00 AM-12:15 PM </td>
                <td> SIMS 105 </td>
            </tr>
            <tr>
                <td> PHIL 230 </td>
                <td> Contemporary Moral Problems </td>
                <td> MW 5:00-6:15 PM </td>
                <td> Kinard 107 </td>
            </tr>
        </table>


        <!-- create the form where the user can logout -->
        <form action="https://deltona.birdnest.org/~acc.hovisi2/custom-project-hovisi/logout.php" method="POST">
            <button type="logout" name="logout">Logout</button>
        </form>
    </body>

</html>