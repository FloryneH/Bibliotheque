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

    class bibliotheque {
        public $livres = array();
    
        public function __construct($livres) {
            $this->livres = $livres;
        }
    }

    function read($csv){
        $file = fopen($csv, 'r');
        $livres = array();

        while (!feof($file) ) {
            $data = fgetcsv($file, 5000);

            if ($data !== false) {
                $livre = new Livre();
                $livre->rank = $data[0];  // Assurez-vous que l'index correspond aux colonnes du CSV
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
                
                $livres[] = $livre;
            }
        }
        fclose($file);
        return $livres;
    }

    $csv = 'goodreads_Top100_YAFiction.csv';
    $livres = read($csv);
    $bibliotheque = new bibliotheque($livres);

   
    dump($bibliotheque);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>