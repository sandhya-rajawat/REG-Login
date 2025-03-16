
<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'DB.php';
include './loginfrm.php';

$obj = new DataConnection();
$con = $obj->DataConnect();

if (isset($_POST['submit'])) {
    $Email = ($_POST['email']);
    $PassWord = ($_POST['password']);
$sql =("SELECT * FROM loginregform WHERE  PassWord='$PassWord' AND  Email = '$Email'  ");

    $result =mysqli_query($con,$sql);
    $user = mysqli_fetch_assoc($result);
    print_r($user);
    
    if ($user) {
       header('location: index.php');
      }
     else {
        echo "Data is Wrong!!";
    }
}

?>