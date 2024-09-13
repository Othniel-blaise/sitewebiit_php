<?php
session_start();
include "ID_Config.php";
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
	 $sql="SELECT * FROM id_etudiant Where user_name='$uname' AND password='$pass'";
	 $result = mysqli_query($conn,$sql);
	 if(mysqli_num_rows($result)===1){
	 	$row = mysqli_fetch_assoc($result);
	 	
	 	if($row['user_name']===$uname&& $row['password']===$pass){
           echo"Bienvenue dans ton espace Administrateur";
           $SESSION['user_name']=$row['user_name'];
           $SESSION['name']=$row['name'];
           $SESSION['id']=$row['id'];
           header("Location:Classe.php");
	 	}else{
	 	header("Location:se_Connecter.php?error=Incorrect User name or password");
	 	exit();
	 } 
 	 }else{
	 	header("Location:se_Connecter.php?error=Incorrect User name or password");
	 	exit(); 
	 }
}

}else{
	header("Location: ./accueil.html");
	exit();
}