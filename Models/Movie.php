<?php
require_once  './Traits/HasRating.php';
require_once  'Genre.php';
//creo una classe Movie con le proprietà title, year e duration
class Movie {
    use HasRating;
    public string $title;
    public int $year; 
    public int $duration;
    //public Genre $genre;
    //Adesso deve accettare più generi, quindi modifico la proprietà in un array di oggetti Genre
    public array $genres;


    //definisco il costruttore per inizializzare le proprietà
    public function __construct(string $_title, int $_year, int $_duration, array $_genres, int $_rating) {
        $this->title = $_title;
        $this->year = $_year;
        $this->duration = $_duration;
        $this->genres = $_genres;
        $this->rating = $_rating;
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