<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

// Create connection
try{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    //set the PDO eeror mode to excipotien
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, burritoformaat, saus, bonen, rijst FROM burrito");
$stmt->execute();

//set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_OBJ);

$tableRows = "";

foreach ($stmt->fetchAll() as $key=>$value){
    $tableRows .="
                <td>$value->id</td> 
                <td>$value->burritoformaat</td>
                <td>$value->saus</td> 
                <td>$value->bonen</td> 
                <td>$value->rijst</td> 
               
                <td><a href='update.php?id=$value->id'><i class='bi bi-pencil-square'></li></></td>
                <td><a href='delete.php?id=$value->id'><i class='bi bi-x-circle'></li></></td>


    </tr>";
   }


} catch(PDOException $e) {
    echo "Error: " .$e->getMessage();
}
$conn =null;
echo "</table>";
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <div class="container">
    
</head>
</body>
</div>
<main class="container">
 
  <div class="container">
   <div class="row">
     </div class="col-12">
      <a href="./index.php" type="button" class="btn btn-dark btn-lg btn-block mt-5">Nieuw record</a>
     </div>
   </div>
  <div class="row">
  </div class="col-12">
  <!-- op deze plek komt de tapel -->
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">burritoformaat</th>
        <th scope="col">saus</th>
        <th scope="col">bonen</th>
        <th scope="col">rijst</th>
      
        

        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <?php
      echo $tableRows ;
      ?>
    </tbody>
  </table>


  </div>
  <div class="row">
  </div class="col-12">
  <p>Het resultaat van jouw traject staat natuurlijk voorop.
    Samen bekijken we welk traject het beste bij jou past!
  </p>
  </div>
  </div>
</main>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>
