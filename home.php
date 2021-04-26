
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	body{
			margin: 0;
			padding: 0;
			background: url(talpak.jpg);
			background-size: auto;
			background-position: center;
			font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", "serif";
		}
		h1 {
    width:500px;
    margin: 0 auto;
    background: #BC1B1E;
    text-align: center;
}
		
		</style>
	<title>HOME</title>
	
</head>
<body>
	
     <h1>Hello, <?php echo $_SESSION['username']; ?></h1>
	
   <center><button>  <a href="logout.php">Logout</a></h1> </button></center><br/>
	<center><button type="submit">  <a href="display.php" >View Activity</a></h1> </button></center>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            