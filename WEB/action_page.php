<?php

    $server = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "ge_db";


    $conn = mysqli_connect($server, $dbusername, $dbpassword, $dbname);

    if(isset($_POST['submit']))
    {
                $username = $_POST['uname'];
                $email = $_POST['e-mail'];
                $name = $_POST['fname'];
                $password = $_POST['pass'];

                $query = mysqli_query("INSERT INTO game_e(uname, e-mail, fname, pass) VALUES('$name', '$email', '$name', '$password')");


    if (mysqli_query($conn, $query)) {
        echo "New record created successfully"; 
    } 
    else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn); 
    }
    
    mysqli_close($conn);
}
