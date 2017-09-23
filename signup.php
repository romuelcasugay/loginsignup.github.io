<?php	
	if(isset($_POST["signup"])){

		// create a connection, just like in basic login
		$con = new PDO("mysql:host=localhost; dbname=db_users;","root","");

		// INSERT INTO is ansql command to add new record to the databse
		$sql="INSERT INTO uuser VALUES('". $_POST["txtuname2"] ."', '". $_POST["txtpword2"] ."')";
		$con->query($sql); //the command will be executed and a new record will be added to the databse

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
		<h1>Congratulations, Romuel John Casugay!</h1>
		<h1>You have successfuly created your own profile!</h1>

	
		<input type="submit" class="btn btn-primary btn-block btn-large" name="login" value="Log in to your account">
        
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

