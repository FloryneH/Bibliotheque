<?php
require __DIR__ . '/vendor/autoload.php';

class Livre
{
    public int $rank;
    public int $bookId;
    public string $title;
    public string $series;
    public string $numberOfSeries;
    public string $author;
    public string $authorLastFirst;
    public string $description;
    public string $language;
    public array $genres;
    public array $characters;
    public string $settings;
    public string $coverImg;
    public string $bookFormat;
    public string $edition;
    public int $pages;
    public string $publisher;
    public int $publishedYear;
    public int $firstPublishYear;
    public array $awards;
    public float $rating;
    public int $numRatings;
    public string $ISBN;
    public string $ISBN13;
}

class Bibliotheque
{
    // Propriété pour stocker les livres
    public array $livres = [];

    // Constructeur qui charge les livres depuis un fichier CSV
    public function __construct($pathCsv)
    {
        $this->dataLivres($pathCsv);
    }

    // Charger les livres depuis le fichier CSV
    public function dataLivres($pathCsv)
    {
        $file = fopen($pathCsv, 'r');

        fgetcsv($file, 5000);

        while (!feof($file)) {
            $data = fgetcsv($file, 5000);

            if ($data !== false) {
                $livre = new Livre();

                $livre->rank = (int)$data[0];
                $livre->bookId = (int)$data[1];
                $livre->title = $data[2];
                $livre->series = $data[3];
                $livre->numberOfSeries = $data[4];
                $livre->author = $data[5];
                $livre->authorLastFirst = $data[6];
                $livre->description = $data[7];
                $livre->language = $data[8];
                $livre->genres = array_map('trim', explode(',', $data[9]));
                $livre->characters = array_map('trim', explode(',', $data[10]));
                $livre->settings = $data[11];
                $livre->coverImg = $data[12];
                $livre->bookFormat = $data[13];
                $livre->edition = $data[14];
                $livre->pages = (int)$data[15];
                $livre->publisher = $data[16];
                $livre->publishedYear = (int)$data[17];
                $livre->firstPublishYear = (int)$data[18];
                $livre->awards = array_map('trim', explode(',', $data[19]));
                $livre->rating = (float)$data[20];
                $livre->numRatings = (int)$data[21];
                $livre->ISBN = $data[22];
                $livre->ISBN13 = $data[23];

                $this->livres[] = $livre;
            }
        };

        fclose($file);
    }
}

$pathCsv = 'goodreads_Top100_YAFiction.csv';
$bibliotheque = new Bibliotheque($pathCsv);



$genres = [];
foreach ($bibliotheque->livres as $livre) {
    foreach ($livre->genres as $genre) {
        if (isset($genres[$genre])) {
            $genres[$genre]++;
        } else {
            $genres[$genre] = 1;
        }
    }
}
arsort($genres);
$trieGenres = array_slice($genres, 0, 20, true);



