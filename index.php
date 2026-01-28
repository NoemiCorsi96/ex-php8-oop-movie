<?php
require_once  'db.php';
//Ho spostato tutto il codice di creazione dei film in db.php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <h1>Lista Film</h1> 

    <ul>
    <?php foreach ($movies as $movie) { ?>
      <li>
        <strong><?php echo $movie->title; ?></strong><br>
        Anno: <?php echo $movie->year; ?><br>
        Durata: <?php echo $movie->duration; ?> minuti<br> 
        Generi:
        <ul>
            <?php foreach ($movie->genres as $genre) { ?>
            <li><?php echo $genre->name; ?></li>
            <?php } ?>
        </ul>
        Valutazione: <?php echo $movie->getStars(); ?><br>
        Riassunto: <?php echo $movie->getSummary(); ?>
        <hr>
      </li>
    <?php } ?>
  </ul>
</body>
</html>