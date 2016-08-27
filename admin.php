<?php
session_start();
	if($_SESSION['giris']==true){
		$_SESSION['hazir']=true;
?>
<h1>Xoş gəlmisiniz, admin!</h1>
<a href="logout.php">Cixis et</a>
<?php
}else{
header('Location:index.php');
}
?>