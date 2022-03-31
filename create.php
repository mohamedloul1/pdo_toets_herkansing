
<?php

if(isset($_POST['submit'])){
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

// Create connection
try{
$conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);

//set the PDO eeror mode to excipotien
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Check connection

// prepare and bind
$stmt = $conn->prepare("INSERT INTO burrito (id, burritoformaat, saus, bonen, rijst)
VALUES (:id, :burritoformaat, :saus, :bonen, :rijst)");
$stmt->bindParam(':id',$id);
$stmt->bindParam(':burritoformaat',$burritoformaat);
$stmt->bindParam(':saus',$saus);
$stmt->bindParam(':bonen',$bonen);
$stmt->bindParam(':rijst',$rijst);

//insert a row
$id= Null;
$burritoformaat=$_POST["burritoformaat"];
$saus=$_POST["saus"];
$bonen=$_POST["bonen"];
$rijst=$_POST["rijst"];


//var dump
$stmt->execute();

echo " yeeeeeeeeeeeeeeeeeeeeeeees";
header("Refresh:3; ./reade.php");
}catch(PDOException $e) {
    echo $e->getMessage();
    header("Location: ./reade.php");
}

$conn= null;
}
?>