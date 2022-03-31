<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PDO_toets_herkansing</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Maak je eigen Burito</h1>
        <form action="./create.php" method="POST">


        <div class="maak_je_keuze">
            <h2 style="font-size: 25px;">Burritoformaat</h2>
        

        <select class="form-select" aria-label="Default select example" name="burritoformaat" id="burritoformaat">
            <option value="20cm">20cm</option>
            <option value="25cm">25cm</option>
            <option value="30cm">30cm</option>
        </select>
        </div>


        <div class="maak_je_keuze1 mt-5">
            <h2 style="font-size: 25px;">Saus</h2>
        

        <select class="form-select" aria-label="Default select example" name="saus" id="saus">
            <option value="Salsa crudo">Salsa crudo</option>
            <option value="Salsa verde">Salsa verde</option>
            <option value="Salsa roja">Salsa roja</option>
            <option value="Creme fraiche">Creme fraiche</option>

        </select>
        </div>

       

        <div class="maak_je_keuze2 mt-5">
            <h2 style="font-size: 25px;">Bonen</h2>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="bonen" id="bonen" value="kidney bonen">
            <label class="form-check-label" for="flexRadioDefault1">
                Kidney Bonen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="bonen" id="bonen" value="zwatre bonen" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Zwatre Bonen
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="bonen" id="bonen" value="bruine bonen" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Bruine Bonen
            </label>
        </div>
        </div>


        <div class="maak_je_keuze3 mt-5">
            <h2 style="font-size: 25px;">Rijst</h2>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rijst" id="rijst" value="witte rijst">
            <label class="form-check-label" for="flexRadioDefault1">
                Witte Rijst
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rijst" id="rijst" value="zwarte rijst" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Zwarte Rijst
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="rijst" id="rijst" value="Bruine Rijst" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Bruine Rijst
            </label>
        </div>
        </div>

  <div class="d-grid gap-2">
  <button type="submit" name="submit" id="submit">Send</button>
  </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>