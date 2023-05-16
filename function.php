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
