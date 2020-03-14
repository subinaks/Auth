<?php  
   include_once 'database.php';  
   $user = new User;  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $trn_date = date("Y-m-d H:i:s");  
      $register = $user->register($_REQUEST['first_name'],
      $_REQUEST['last_name'],
      $_REQUEST['email'],
      $_REQUEST['password']);  
      if($register){  
         echo "Registration Successful!";  
      }
      else
      {  
         echo "Entered email already exist!";  
      }  
   }  
?>  
    <html>  
  
    <head>  
        <title>Registration</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Registration</h1>  
            <form action="" method="post">  
                <input type="text" name="first_name" placeholder="Please Enter First  Name" required />  
                <br />  
                <input type="text" name="last_name" placeholder="Please Enter Last Name" required />  
                <br />  
                <input type="text" name="email" placeholder="Please Enter Email" required />  
                <br />  
                <input type="password" name="password" placeholder="Please Enter Password" required />  
                <br />  
                <input type="submit" name="submit" value="Register" />  
            </form>  
            <p>Alredy Registered?<a href="login.php"> Login Here</a></p>  
        </div>  
    </body>  
  
    </html>  