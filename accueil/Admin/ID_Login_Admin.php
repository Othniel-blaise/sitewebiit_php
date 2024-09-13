<?php
session_start();
include "Config_Admin.php";
if(isset($_POST['username'])&& isset($_POST['username'])){
	function validate($data){
		$data =trim($data);
		$data =stripslashes($data);
		$data =htmlspecialchars($data);	
		return $data;
	}  

$uname = validate($_POST['username']);
$pass = validate($_POST['password']);
if (empty($uname)){ 
	header("Location: se_Connecter.php?error=User Name is required");
	exit();
}
else if (empty($pass)){
 header("Location:se_Connecter.php?error=password is required");
	exit();

}else{ 
	 $sql="SELECT * FROM Usert Where username='$uname' AND password='$pass'";
	 $result = mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)===1){
	 	$row = mysqli_fetch_assoc($result);
	 	
	 	if($row['username']===$uname&& $row['password']===$pass){
           echo"Bienvenue dans ton espace Administrateur";
           $SESSION['username']=$row['username'];
           $SESSION['name']=$row['name'];
           $SESSION['id']=$row['id'];
           header("Location:Classe.php");
	 	}else{
	 	header("Location:ID_Login_Admin.php?error=Incorrect User name or password");
	 	exit();
	 } 
 	 }else{
	 	header("Location:ID_Login_Admin.php?error=Incorrect User name or password");
	 	exit(); 
	 }
}

}