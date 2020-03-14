<?php  
class DatabaseConnection {
    private $hostname = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'project_login';
    public $connection;
    public function __construct() {
        $host = mysqli_connect($this->hostname, $this->username, $this->password);
        if ($host) {
            $connection = mysqli_select_db($host, $this->database);
            if (!$connection) {
                die('An error occured while trying to connect to the database.');
            }
            $this->connection = $host;
        }
    }
}
  
class User  
  
{  
     public  function register($first_name, $last_name, $email, $pass, $dob)
     {  
        $connection = new DatabaseConnection();
        $pass = md5($pass);  
        $checkuser = mysqli_query($connection->connection, "SELECT id FROM users WHERE email='$email'");  
        $result = mysqli_num_rows($checkuser);  
        if ($result == 0)
         {  
            $register = mysqli_query($connection->connection, "INSERT INTO users (first_name, last_name, email, password,dob) VALUES ('$first_name','$last_name','$email','$pass','$dob')") or die(mysqli_error($connection->connection));  
            return $register;  
        }
        else 
         {  
            return false;  
         }  
     }  
     
    public function login($email, $pass) { 
        $connection = new DatabaseConnection(); 
        $pass = md5($pass);  
        $check = mysqli_query($connection->connection, "SELECT * FROM users WHERE email='$email' AND password='$pass'");  
        $data = mysqli_fetch_array($check);  
        $result = mysqli_num_rows($check);  
        if ($result == 1) {  
            $_SESSION['login'] = true;  
            $_SESSION['id'] = $data['id'];  
            return true;  
        } else {  
            return false;  
        }  
    }  
  
    public  function fullname($id) {  
        $connection = new DatabaseConnection();
        $result = mysqli_query($connection->connection, "SELECT * FROM users WHERE id='$id'");  
        $row = mysqli_fetch_array($result);  
        echo $row['first_name'];  
    }  
  
    public function session() {  
        if (isset($_SESSION['login'])) {  
            return $_SESSION['login'];  
        }  
    }  
  
    public function logout() {  
        $_SESSION['login'] = false;  
        session_destroy();  
    }  
}  
  
?>