<?php	
	if(isset($_POST["login"])){

		$con = new PDO("mysql:host=localhost; dbname=db_users;","root","");

		$sql="SELECT * FROM uuser WHERE uname='". $_POST["txtuname"] ."' and password='". $_POST["txtpword"] ."'";
			$result=$con->query($sql); 
			$rows=$result->rowCount(); 
			if($rows>=1){
				header("location: profile.php");
			}else{
				echo "";
			}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Basic Login and Sign Up using PHP and MySql</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="login">
	<form method="post" action="index.php"> 
		<h1>Oops! User does not exist. </h1>
	
		<input type="submit" class="btn btn-primary btn-block btn-large" name="login" value="Try Again">
        
</form>
 <br>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9155049400353686"
     data-ad-slot="9589048256"
     data-ad-format="auto"></ins>
</div>



</body>
</html>

