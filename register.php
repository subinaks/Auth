<?php  
   include_once 'database.php';  
   $user = new User;  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $trn_date = date("Y-m-d H:i:s");  
      $register = $user->register($_REQUEST['first_name'],
      $_REQUEST['last_name'],
      $_REQUEST['email'],
      $_REQUEST['password'], $_REQUEST['dob']);  
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
<head></head>
<body bgcolor="black" font-color="white">
<form action="" method="post">  
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1 style="color:blue;">Registration</h1></td>
</tr><center>
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td style="color:blue;">First Name:</td>
    <td><input size="30" type='text' name='first_name' placeholder="Please enter your first name" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td style="color:blue;">Last Name:</td>
    <td><input type='text' size="30" name='last_name' placeholder="Please enter your first name" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td style="color:blue;">Date Of Birth:</td>
    <td><input type='date' size="30" name='dob' placeholder="Please enter your last name" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td style="color:blue;">Email:</td>
    <td><input type='email' size="30" name='email' placeholder="Please enter your email" required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td style="color:blue;" >Password:</td>
    <td><input type='password' size="30" name='password' required></td>
</tr>
<tr> <td>&nbsp;</td> </tr>

<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='submit' value="Register"></td>
</tr>  
<tr> <td>&nbsp;</td> </tr> 
</form>   
<tr>
<td style="color:blue;">Alredy Registered?<a href="login.php"> Login Here</a></td> 
</tr>      

</table>
</table>
 
</table>
</body>
</html>