<h3>Sima Sari Dewi Siti Aulia - XI RPL</h3>
<?php
class Document {
    public $autors;
    public $date;

    public function setAutors($autors){
        $this->autors = $autors;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getAutors(){
        return $this->autors;
    }
    
    public function getDate(){
        return $this->date;
    }
}

$document = new Document();
$document->setAutors("Penulis : Tere Liye");
$document->setDate("Tanggal : 16 Januari 2015");

echo $document->getAutors();
echo "<br>";
echo $document->getDate();
echo "<br>";
echo "<hr>";

class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function setAutors($autors){
        $this->autors = $autors;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAutors(){
        return $this->autors;
    }
}

$book = new Book();
$book->setTitle("Judul Buku : Bulan");
$book->setAutors("Penulis : Tere Liye");


echo $book->getTitle();
echo "<br>";
echo $book->getAutors();
echo "<br>";
echo "<hr>";

class Email extends Document {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function setAutors($autors){
        $this->autors = $autors;
    }

    public function getSubject(){
        return $this->subject;
    }

    public function getAutors(){
        return $this->autors;
    }
}

$email = new Email();
$email->setSubject("Subject : Cerita Fantasi");
$email->setAutors("Penulis : Tere Liye");

echo $email->getSubject();
echo "<br>";
echo $email->getAutors();
echo "<br>";
echo "<hr>";

?>