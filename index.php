<?php

class Movie
{
    private $title;
    private $country;
    private $year;
    private $director;

    public function __construct(string $_title, string $_country, int $_year, string $_director) {
        $this->title = $_title;
        $this->country = $_country;
        $this->year = $_year;
        $this->director = $_director;
    }

    public function setTitle($_title) {
        $this->title = $_title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setCountry($_country) {
        $this->country = $_country;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setYear($_year) {
        $this->year = $_year;
    }

    public function getYear() {
        return $this->year;
    }

    public function setDirector($_director) {
        $this->director = $_director;
    }

    public function getDirector() {
        return $this->director;
    }

}

$movieOne = new Movie('Il Cacciatore', 'US', 1978, 'Michael Cimino');

$movieTwo = new Movie('Pink Flamingos', 'US', 1972, 'John Waters');

$movieThree = new Movie('Sei donne per l\'assassino', 'IT', 1964, 'Mario Bava');

$movieFour = new Movie('Nikita', 'FR', 1990, 'Luc Besson');

$movieFive = new Movie('Nightmare - Dal profondo della notte', 'US', 1984, 'Wes Craven');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>
    <?php

        $arrMovies = [$movieOne, $movieTwo, $movieThree, $movieFour, $movieFive];
        // var_dump($arrMovies)

        foreach($arrMovies as $movie) {
            echo '<h1 style="margin-left:40px; color:red">' . 'Scheda Film:' . '</h1>';
            echo '<ul style="margin-bottom:100px; list-style-type:none">';
            echo '<li>' . '<h3>' . 'Titolo: ' .  $movie->getTitle() . '</h3>' . '</li>';
            echo '<li>' . '<h3>'. 'Paese: ' . $movie->getCountry() . '</h3>' . '</li>';
            echo '<li>' . '<h3>'. 'Anno: ' . $movie->getYear() . '</h3>' . '</li>';
            echo '<li>' . '<h3>'. 'Regia: ' . $movie->getDirector() . '</h3>' . '</li>';
            echo '</ul>';
        }
    ?>

</body>
</html>