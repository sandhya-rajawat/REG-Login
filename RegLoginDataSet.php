
<?php 
include './Process.php';
include './Form.php';
if(isset($_POST['submit'])){
   
    $Name = $_POST['name'];
    $PassWord = $_POST['password'];
    $Email = $_POST['email'];
if(strlen($PassWord)<8){
    echo"Password must be atlest 8 charectes long";
}
$obj1 = new Get_Data_handler();
$result = $obj1->RegUserInfo($Name,$PassWord,$Email); 
if($result){
    echo "<script>alert('data insert')</script>";
}
}
else{
    echo "<script>alert('data  not insert')</script>";
}

// $obj->close($conn); 
?>