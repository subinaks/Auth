<?php  
   session_start();  
   include_once 'database.php';  
   $user = new User;  
   $id = $_SESSION['id'];  
   if (!$user->session())
   {  
      header("location:login.php");  
   }  
   if (isset($_REQUEST['q']))
   {  
      $user->logout();  
      header("location:login.php");  
   }  
?>  
<html>
    <head>
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body bgcolor="white">
        <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
        <center>
        <tr>
            <td>
                <h1></h1>
            </td>
        </tr>
        <center>
        <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
            <tr>
                <td>
                    <h1 style="color:blue;">Welcome <?php $user->fullname($id);?></h1>
                    <p align="right">
                        <a href="?q=logout" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                        </a>
                    </p>
                  
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
        </table>
    </body>
</html>