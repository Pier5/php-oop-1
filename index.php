<!-- create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php

class Movie
{
    private $title;
    private $country;
    private $year;
    private $director;

    private $genre = '';

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

    public function setGenre($_genre) {
        $this->genre = $_genre;
    }

    public function getGenre() {
        return $this->genre;
    }
}

$movieOne = new Movie('Il Cacciatore', 'US', 1978, 'Michael Cimino');
$movieOne->setGenre('drammatico');
var_dump($movieOne);

$movieTwo = new Movie('Pink Flamingos', 'US', 1972, 'John Waters');
$movieTwo->setGenre('weird');

$movieThree = new Movie('Sei donne per l\' assassino', 'IT', 1964, 'Mario Bava');
$movieThree->setGenre('thriller', 'giallo');

$movieFour = new Movie('Nikita', 'FR', 1990, 'Luc Besson');
$movieFour->setGenre('drammatico', 'azione', 'noir');

$movieFive = new Movie('Nightmare - Dal profondo della notte', 'US', 1984, 'Wes Craven');
$movieFive->setGenre('horror');

    
?>