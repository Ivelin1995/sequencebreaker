<?php
session_start();

if(!isset($_SESSION['points'])){
	$_SESSION['points']=0;
}

if(!empty($_POST['input'])){
	if($_POST['input']==$_POST['answer']){
		echo "PASSED";
		$_SESSION['points']+=5;
	}else{
		echo "FAILED";
		$_SESSION['points']-=2;
	}
}



$arr = array(
array(1,2,3,4),
array(11,12,13,14),
array(21,22,23,24)
);

$random = rand(0,2);

$selectedArr= $arr[$random];



?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<head>
<body>
<div id="center1">
<?php
for($i=0;$i<count($selectedArr)-1;$i++){
	if($i!=0){
		echo ", " . $selectedArr[$i];
	}else{
		echo $selectedArr[$i];
	}
	
}

?>
<div>
<div id="center2">
	<form action="" method="post">
	  <input type="text" name="input"><br>
	  <input type="hidden" name="answer" value=<?php 
		echo '"'.$_POST['answer']=$selectedArr[count($selectedArr)-1].'"';?>>
	  <input type="submit" value="Submit">
	</form>
<div>
<div id="topright">
	Points: <?php echo $_SESSION['points']; ?>
</div>
<body>
<html>