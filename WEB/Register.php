<!DOCTYPE html>
<html>

   

<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>Index</title>

</head>


<body>

    <div class="SL">
        <ul>
            <li><a href="Login.html">Log-In</a></li>
            <li><a href="Register.html">Sign-Up</a></li>
       </ul>
       </div>
       
    <div class="head">
        <ul>
           <li><a href="Index.html">Home</a></li>
           <li><a href="Engines.html">Engines</a></li>
           <li><a href="Forum.html">Forum</a></li>
           <li><a href="Contact.html">Contact</a></li>
       </ul>
       </div>

       <h2>Sign-Up</h2>

   
        
    <form action="action_page.php" method="POST">

    <div class="container">
    <label for="uname"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="e-mail"><b>E-mail:</b></label>
    <input type="email" placeholder="Enter E-mail" name="e-mail" required>

    <label for="fname"><b>Name:</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="psw"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Sign-Up</button> 

    </form>
    </div>

</body>
</html>