<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include 'DB.php';

class Get_Data_handler{
function RegUserInfo($Name,$PassWord,$Email){
$obj=new DataConnection();
    $con= $obj->DataConnect();
$sql="INSERT INTO  loginregform(Name,PassWord,Email) 
 VALUES('$Name','$PassWord','$Email')";
$result=mysqli_query($con,$sql);
if($result){
return $result;
}
 else{
  return (mysqli_error($con));
 }
}

}
?>