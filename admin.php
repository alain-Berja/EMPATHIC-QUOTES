<?php

$Emotion = $_POST['emo'];
$Quote = $_POST['qoute'];

$db = mysqli_connect("localhost","root","","admin_db");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
//mysqli_select_db("mydb",$db) or die(mysqli_error());

$query = "INSERT INTO inputs (`emo`, "."`qoute') VALUES "."('".$Emotion."', '".$Quote"')";


$input = mysqli_query($db, $query);

if($input){
	echo "Your message is already added to the database.";
}else{
	echo "Sorry, we don't seem to have a connection.";
}
echo "Here are the messages:<br>";


?>
