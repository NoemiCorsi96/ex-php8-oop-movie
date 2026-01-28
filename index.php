<?php
//definisco la classe Genre e faccio composizione con la classe Movie
class Genre {
    public string $name;

    public function __construct(string $_name) {
        $this->name = $_name;
    }
}

//creo una classe Movie con le proprietà title, year e duration
class Movie {
    public string $title;
    public int $year; 
    public int $duration;
    //public Genre $genre;
    //Adesso deve accettare più generi, quindi modifico la proprietà in un array di oggetti Genre
    public array $genres;


    //definisco il costruttore per inizializzare le proprietà
    public function __construct(string $_title, int $_year, int $_duration, array $_genres) {
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres = $_genres;
    }

    //definisco un metodo per ottenere una descrizione del film
    public function getSummary(): string{
        $genreNames = [];
        foreach ($this->genres as $genre) {
            $genreNames[] = $genre->name;
        }
        return $this->title . " (" . $this->year . ") - " .
               $this->duration . " min - Genere: " . implode(", ", $genreNames);
    }
}
$sciFi = new Genre("Sci-Fi");
$action = new Genre("Azione");
$animation = new Genre("Animazione");
$fantasy = new Genre("Fantasy");

// ogni film riceve un ARRAY di generi
$movie1 = new Movie(
    "Inception",
    2010,
    148,
    [$sciFi, $action]
);

$movie2 = new Movie(
    "Spirited Away",
    2001,
    125,
    [$animation, $fantasy]
);

$movies = [$movie1, $movie2];

//istanzio due oggetti Movie
//$movie1 = new Movie("Inception", 2010, 148, [new Genre("Sci-Fi")]);
//$movie2 = new Movie("The Matrix", 1999, 136, [new Genre("Sci-Fi")]);
//creo un array contenente i due film ed utilizzo un foreach per stamparne le informazioni
//$movies = [$movie1, $movie2];

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
        Riassunto: <?php echo $movie->getSummary(); ?>
        <hr>
      </li>
    <?php } ?>
  </ul>
</body>
</html>