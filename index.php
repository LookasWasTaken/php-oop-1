<?php
class Movie
{
    public $title;
    public $director;
    public $genre;
    public $duration;
    public $vote;
    public $language = "English";

    public function __construct(string $title, string $director, Genre $genre, int $duration, string $vote)
    {
        $this->title = $title;
        $this->director = $director;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->vote = $vote;
    }

    public function getData()
    {
        return $this->title;
        return $this->director;
        return $this->genre;
        return $this->duration;
        return $this->vote;
        return $this->language;
    }

    public function varDumped()
    {
        var_dump($this->title);
        var_dump($this->director);
        var_dump($this->genre);
        var_dump($this->duration);
        var_dump($this->vote);
        var_dump($this->language);
    }
}

class Genre
{
    public $genre;
}

$movies = [
    new Movie("Ready Player One", "Steven Spielberg", new Genre("Fantasy"), 140, "7.4 IMDb"),
    new Movie("The Lord of The Ring: The Return of the King", "Peter Jackson", new Genre("Fantasy"), 201, "9 IMDb"),
    new Movie("Avengers: Endgame", "Anthony Russo, Joe Russo", new Genre("Fantasy"), 181, "8.4 IMDb"),
    new Movie("Zodiac", "David Fincher", new Genre("Thriller"), 157, "7.7 IMDb"),
    new Movie("The Terminal", "Steven Spielberg", new Genre("Comedy"), 128, "7.4 IMDb"),
    new Movie("The Imitation Game", "Morten Tyldum", new Genre("Thriller"), 114, "8 IMDb"),
    new Movie("Fight Club", "David Fincher", new Genre("Thriller"), 139, "8 IMDb")
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie DB</title>

    <!-- EXTERNAL BOOTSTRAP CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h1 class="text-center">MOVIE DATABASE</h1>
        <div class="row p-4">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-black"><?php echo ($movie->title) ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-- EXTERNAL BOOTSTRAP JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>