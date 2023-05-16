<?php 
class Movie
{
    public $title;
    public $director;
    public $genre;
    public $duration;
    public $vote;
    public $language = "English";

    public function __construct(string $title, string $director, string $genre, int $duration, string $vote) {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->vote = $vote;
    }

    public function getData() {
        return $this->title;
        return $this->director;
        return $this->genre;
        return $this->duration;
        return $this->vote;
        return $this->language;
    }

    public function varDumped(){
        var_dump($this->title);
        var_dump($this->director);
        var_dump($this->genre);
        var_dump($this->duration);
        var_dump($this->vote);
        var_dump($this->language);
    }
}

$rpo = new Movie ("Ready Player One", "Steven Spielberg", "Fantasy", 140, "7,4 IMDb");
$lotrtrotk = new Movie ("The Lord of The Ring: The Return of the King", "Peter Jackson", "Fantasy", 201, "9 IMDb");
$end = new Movie ("Avengers: Endgame", "Anthony Russo, Joe Russo", "Fantasy", 181, "8,4 IMDb");

var_dump($rpo);
var_dump($lotrtrotk);
var_dump($end);

?>

