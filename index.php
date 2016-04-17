<?php

if(!empty($_POST['input'])){
	if($_POST['input']==$_POST['answer']){
		echo "PASSED";
	}else{
		echo "FAILED";
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
<style>
#center1 {
    margin: auto;
    width: 20%;
    border: 3px solid #73AD21;
    padding: 10px;
    text-align: center;
}
input[type="text"] {
  padding: 10px;
  border: none;
  border-bottom: solid 2px #c9c9c9;
  transition: border 0.3s;
}
input[type="text"]:focus,
input[type="text"].focus {
  border-bottom: solid 2px #969696;
}
input[type="text"] {
  padding: 10px;
  border: solid 5px #c9c9c9;
  box-shadow: inset 0 0 0 1px #707070;
  transition: box-shadow 0.3s, border 0.3s;
}
input[type="text"]:focus,
input[type="text"].focus {
  border: solid 5px #969696;
}
input[type="text"] {
  display: block;
  margin: 0;
  width: 100%;
  font-family: sans-serif;
  font-size: 18px;
  appearance: none;
  box-shadow: none;
  border-radius: none;
}
input[type="text"]:focus {
  outline: none;
}
</style>
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
<body>
<html>