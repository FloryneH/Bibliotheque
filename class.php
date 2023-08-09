<?php
require __DIR__.'/vendor/autoload.php';

class Livre {
    public $rank;
    public $bookId;
    public $title;
    public $series;
    public $numberOfSeries;
    public $author;
    public $authorLastFirst;
    public $description;
    public $language;
    public $genres;
    public $characters;
    public $settings;
    public $coverImg;
    public $bookFormat;
    public $edition;
    public $pages;
    public $publisher;
    public $publishedYear;
    public $firstPublishYear;
    public $awards;
    public $rating;
    public $numRatings;
    public $ISBN;
    public $ISBN13;
}

class Bibliotheque {
    // Propriété pour stocker les livres
    public array $livres = array();

    // Constructeur qui charge les livres depuis un fichier CSV
    public function __construct($pathCsv) {
        $this->dataLivres($pathCsv);
    }

    // Charger les livres depuis le fichier CSV
    public function dataLivres($pathCsv) {
        $file = fopen($pathCsv, 'r');

        fgetcsv($file, 5000);

        while (!feof($file)) {
            $data = fgetcsv($file, 5000);

            if ($data !== false) {
                $livre = new Livre();

                $livre->rank = $data[0];  
                $livre->bookId = $data[1];
                $livre->title = $data[2];
                $livre->series = $data[3];
                $livre->numberOfSeries = $data[4];
                $livre->author = $data[5];
                $livre->authorLastFirst = $data[6];
                $livre->description = $data[7];
                $livre->language = $data[8];
                $livre->genres = $data[9];
                $livre->characters = $data[10];
                $livre->settings = $data[11];
                $livre->coverImg = $data[12];
                $livre->bookFormat = $data[13];
                $livre->edition = $data[14];
                $livre->pages = $data[15];
                $livre->publisher = $data[16];
                $livre->publishedYear = $data[17];
                $livre->firstPublishYear = $data[18];
                $livre->awards = $data[19];
                $livre->rating = $data[20];
                $livre->numRatings = $data[21];
                $livre->ISBN = $data[22];
                $livre->ISBN13 = $data[23];
                
                $this->livres[] = $livre;
            }
        };

        fclose($file);
    }
}

// Chemin vers le fichier CSV
$pathCsv = 'goodreads_Top100_YAFiction.csv';

// Création d'une instance de Bibliotheque
$bibliotheque = new Bibliotheque($pathCsv);

// Affichage de la bibliothèque
dump($bibliotheque);