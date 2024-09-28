<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO</title>
</head>
<body>
    <form action="output.php" method="POST">

       <div>
           <label for="Username">Username</label>
           <input type="text" name="Username" id="Username">
       </div>

       <div>
           <label for="Email">Email</label>
           <input type="Email" name="Email" id="Email">
       </div>

       <div>
           <label for="Password">Password</label>
           <input type="Password" name="Password" id="Password">
       </div>

       <div>
           <label for="Confirm Password">Confirm Password</label>
           <input type="Password" name="ConfirmPass" id="ConfirmPass">
           
               <input type="submit" value="Register">
       </div>

    </form>


</body>
</html>