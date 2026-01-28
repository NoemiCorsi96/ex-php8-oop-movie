<?php
require_once  './Models/Movie.php';
require_once  './Models/Genre.php';
//creo i generi 
$sciFi = new Genre("Sci-Fi");
$action = new Genre("Azione");
$animation = new Genre("Animazione");
$fantasy = new Genre("Fantasy");

// ogni film riceve un ARRAY di generi
$movie1 = new Movie(
    "Inception",
    2010,
    148,
    [$sciFi, $action],
    5
);

$movie2 = new Movie(
    "Spirited Away",
    2001,
    125,
    [$animation, $fantasy],
    4
);

$movies = [$movie1, $movie2];