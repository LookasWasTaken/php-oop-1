<?php
class Movie
{
    public $title;
    public $director;
    public $genre;
    public $duration;
    public $vote;
    public $language = "English";

    public function __construct(string $title, string $director, Genre $genre, int $duration, int $vote)
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

    public function __construct(string $genre)
    {
        $this->genre = $genre;
    }
}

$movies = [
    new Movie("Ready Player One", "Steven Spielberg", new Genre("Fantasy"), 140, 7.4),
    new Movie("The Lord of The Ring: The Return of the King", "Peter Jackson", new Genre("Fantasy"), 201, 9),
    new Movie("Avengers: Endgame", "Anthony Russo, Joe Russo", new Genre("Fantasy"), 181, 8.4),
    new Movie("Zodiac", "David Fincher", new Genre("Thriller"), 157, 7.7),
    new Movie("The Terminal", "Steven Spielberg", new Genre("Comedy"), 128, 7.4),
    new Movie("The Imitation Game", "Morten Tyldum", new Genre("Thriller"), 114, 8),
    new Movie("Fight Club", "David Fincher", new Genre("Thriller"), 139, 8)
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

<body class="bg-dark">

    <div class="container py-5">
        <h1 class="text-center text-danger">MOVIE DATABASE</h1>
        <div class="row py-4">
            <?php foreach ($movies as $movie) : ?>
                <div class="col-8 mx-auto">
                    <div class="card m-4">
                        <div class="card-header bg-dark">
                            <h4 class="text-center text-success"><?php echo ($movie->title) ?></h4>
                        </div>
                        <div class="card-body">
                            <div>
                                <h6>Director: <?php echo ($movie->director) ?></h6>
                            </div>
                            <div>
                                <h6>Genre: <?php echo ($movie->genre->genre) ?></h6>
                            </div>
                            <div>
                                <h6>Duration: <?php echo ($movie->duration) ?>min</h6>
                            </div>
                            <div>
                                <h6>Average Vote: <?php echo ($movie->vote) ?> from IMDb</h6>
                            </div>
                            <div>
                                <h6>Language: <?php echo ($movie->language) ?></h6>
                            </div>
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