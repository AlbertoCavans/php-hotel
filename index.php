<?php

require_once __DIR__ . "/logics/init.php";





?>




<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My hotels info</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>


<!-- BODY HTML -->
<body>
    <!-- GENERAL CONTAINER -->
<div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="container d-flex align-items-center justify-content-center flex-column my-5 w-75">

    <!-- PAGE TITLE -->
<h1 class="text-primary my-3">My Hotels Info</h1>

<!-- FILTERS CARD -->
<div class="card align-self-start my-3 p-3 w-25">
    <form method="GET">

    <!-- FILTER BY PARKING -->
    <div class="form-check py-2">
     <input class="form-check-input" type="checkbox" id="parking" name="parking"

     <?= $select_parking ? "checked" : "" ?>
     >

     <label class="form-check-label" for="parking">
      Parcheggio disponibile
     </label>
    </div>
    <hr>

    <!-- FILTER BY VOTE -->

    <div class="mb-3">
     <label for="vote" class="form-label">Voto</label>
     <input type="number" class="form-control" id="vote" name="vote" min="1" max="5">
    </div>

<!-- FORM BUTTON -->
<button class="btn btn-primary">Seleziona</button>

    </form>
</div>

<!-- CARD INFO -->
<div class="card w-100">  

<!-- HEADER TABLE -->
    <ul class="list-group">
  <li class="list-group-item list-group-item-dark"><div class="row w-100">
        <div class="col-2">Nome</div>
        <div class="col-3">Descrizione</div>
        <div class="col-2">Parcheggio</div>
        <div class="col-2">Voto</div>
        <div class="col-3">Distanza dal centro</div>
    </div></li>


    <!-- TABLE BODY -->
    <?php  foreach ($hotels as $hotel): ?>

    <li class="list-group-item list-group-item-secondary"><div class="row w-100">
        <div class="col-2"><?= $hotel["name"] ?></div>
        <div class="col-3"><?= $hotel["description"] ?></div>
        <div class="col-2"><?= $hotel["parking"] ? "Sì": "No" ?></div>
        <div class="col-2"><?= $hotel["vote"] ?></div>
        <div class="col-3"><?= ($hotel["distance_to_center"] . " Km") ?></div>
    </div></li>

    <?php 
 endforeach;
?>
</ul>
</div>


</div>
</div>
</body>
</html>