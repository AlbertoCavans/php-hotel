<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My hotels info</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>



<body>
<div class="container-fluid d-flex align-items-center justify-content-center">
    <div class="container d-flex align-items-center justify-content-center flex-column my-5">

<h1 class="text-primary my-3">My Hotels Info</h1>



<div class="card w-75">
    

    <ul class="list-group">
  <li class="list-group-item list-group-item-dark"><div class="row w-100">
        <div class="col-2">Nome</div>
        <div class="col-3">Descrizione</div>
        <div class="col-2">Parcheggio</div>
        <div class="col-2">Voto</div>
        <div class="col-3">Distanza dal centro</div>
    </div></li>

    <?php 
 foreach ($hotels as $hotel):
?>


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