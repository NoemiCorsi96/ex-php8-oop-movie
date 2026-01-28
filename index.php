<?php
//creo una classe Movie con le proprietà title, year e duration
class Movie {
    public string $title;
    public int $year; 
    public int $duration;

    //definisco il costruttore per inizializzare le proprietà
    public function __construct(string $_title, int $_year, int $_duration) {
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
    }

    //definisco un metodo per ottenere una descrizione del film
    public function getSummary(): string{
        return $this->title . " (" . $this->year . ") - Duration: " . $this->duration . " minutes.";
    }
}
//istanzio due oggetti Movie
$movie1 = new Movie("Inception", 2010, 148);
$movie2 = new Movie("The Matrix", 1999, 136);
//creo un array contenente i due film ed utilizzo un foreach per stamparne le informazioni
$movies = [$movie1, $movie2];

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
        Riassunto: <?php echo $movie->getSummary(); ?>
        <hr>
      </li>
    <?php } ?>
  </ul>
</body>
</html>