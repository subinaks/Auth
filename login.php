<?php  
   session_start();  
   include_once 'database.php';  
   $user = new User();  
   if ($user->session())  
   {  
      header("location:index.php");  
   }  
  
   $user = new User();  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $login = $user->login($_REQUEST['email'],$_REQUEST['password']);  
      if($login){  
         header("location:index.php");  
      }
      else
      {  
         echo "Login Failed!";  
      }  
   }  
?> 
<html>
<head></head>
<body bgcolor="black" font-color="white">
<form action="" method="post">  
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 style="color:blue;">Log In</h1></td>
</tr><center>
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>

<tr>
    <td style="color:blue;">Email:</td>
    <td><input type='email' name='email' placeholder="Please enter your email" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td style="color:blue;">Password:</td>
    <td><input type='password' name='password' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='submit' value="Login"></td>
</tr>  
<tr> <td>&nbsp;</td> </tr> 
</form>   
<tr>
<td style="color:blue;">Not registered yet?<a href="register.php"> Register Here</a></td> 
</tr>      
</table>
</body>
</html> 
    <!-- <html>  
  
    <head>  
        <title>Log In</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Log In</h1>  
            <form action="" method="post">  
                <input type="text" name="email" placeholder="Please Enter Email" required />  
                <br />  
                <input type="password" name="password" placeholder="Please Enter Password" required />  
                <br />  
                <input type="submit" name="submit" value="Login" />  
            </form>  
            <p>Not registered yet?<a href="register.php"> Register Here</a></p>  
        </div>  
    </body>  
  
    </html>   -->