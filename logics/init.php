<?php

require_once __DIR__ . "/../data/array.php";

/* FILTER BY PARKING */
$select_parking = isset($_GET["parking"]) ? true : false;


if ($select_parking) {
    $hotels = array_filter($hotels, function ($hotel, $index) {
        return $hotel["parking"] == true;
    }, ARRAY_FILTER_USE_BOTH);
};


/* FILTER BY VOTE */
$select_vote = $_GET["vote"] ?? false;

if($select_vote) $hotels = array_filter($hotels, fn($hotel) => $hotel["vote"] >= $select_vote)

?>