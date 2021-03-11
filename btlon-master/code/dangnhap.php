<?php
include "models/config.php";

 if(isset($_POST['login'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $sql="select *from nguoidung where username='$user' and password='$pass'";
    $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
    $row=mysqli_fetch_array($result);
    $quyen=$row['quyen_try_cap'];
    echo $num;
    if($num>0){
    	$row=mysqli_fetch_array($result);
    	session_start();
			  
	    $_SESSION['dangnhap']=$user;
		
		
		$_SESSION ['quyen_truy_cap'] = $quyen;
		//echo $_SESSION ['quyen_truy_cap'];

		 header('location:index.php'); 

		
	
			
    }
    else{
    	echo"SAI";
    }
 }
?>