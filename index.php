<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
<body>
<img id="logo" src="logo.png"></img>


<?php
include 'config.php';
session_start();

if(!isset($_SESSION['points'])){
	$_SESSION['points']=0;
}
$pass=true;
if(!empty($_POST['input'])){
	if($_POST['input']==$_POST['answer']){
		
		echo "<div class=\"notify successbox\">
        <h1>SUCCESS</h1>
        <span class=\"alerticon\"><img src=\"http://s22.postimg.org/i5iji9hv1/check.png\" alt=\"checkmark\" /></span>
        <p>Congratulations! You entered the correct number.</p>
      </div>";


		$_SESSION['points']+=5;
	}else{
		$pass=false;

		echo "<div class=\"notify errorbox\">
		        <h1>FAIL</h1>
		        <span class=\"alerticon\"><img src=\"http://s22.postimg.org/ulf9c0b71/error.png\" alt=\"error\" /></span>
		        <p>You entered the wrong number in the sequence. Try again!</p>
		      </div>";


		$_SESSION['points']-=2;
	}
}


//2d array of sequences
$arr = array();


$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);


// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$query1="SELECT numbers from sequences";
$result=mysqli_query($con,$query1);
$column = array();

while($row = mysqli_fetch_array($result)){
	$nums=explode(" ",$row[0]);
    array_push($arr,$nums);

}





//choose random array. range should be modified to fit the number of sequences we have
$random = rand(0,2);
if(!$pass){
	$random=$_POST['sequence'];
}
$selectedArr= $arr[$random];




?>


<div id="center1">
<?php
if($pass){
	for($i=0;$i<count($selectedArr)-2;$i++){
		if($i!=0){
			echo ", " . $selectedArr[$i];
		}else{
			echo $selectedArr[$i];
		}
	
	}
}else{
	for($i=0;$i<count($selectedArr)-1;$i++){
		if($i!=0){
			echo ", " . $selectedArr[$i];
		}else{
			echo $selectedArr[$i];
		}
	
	}
}


?>
<div>
<div id="center2">
	<form action="" method="post">
	  <input type="text" name="input"><br>
	  <input type="hidden" name="answer" value=<?php 

	  	if($pass){
	  		echo '"'.$_POST['answer']=$selectedArr[count($selectedArr)-2].'"';
	  	}else{
	  		echo '"'.$_POST['answer']=$selectedArr[count($selectedArr)-1].'"';
	  	}
		?>>
		<input type="hidden" name="sequence" value=<?php 
	  		echo '"'.$_POST['sequence']=$random.'"';
		?>>
	  <input type="submit" value="Submit" name="btn">
	</form>
<div>
<div id="topright">
	Points: <?php echo $_SESSION['points']; ?>
</div>
<body>
<html>