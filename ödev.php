<?php
class internet
{

    
    public function __construct($hostname = "localhost", $username, $pass, $dbName)
    {
        $connection = "$hostname, $username, $pass, $dbName";
        return $connection;
    }


    /* public her yerden erişilebilir. */
    public $isim = "Enes";
    public $soyisim = "Saz";

    
    public function write()
    {
        function karesi($sayi)
        {
        return $sayi*$sayi;
        }
        $sonuc="7 Sayısının Karesi:".karesi(7);
        echo "<br>";
        echo $sonuc;
        
    }

    public function Total($inputnum){
        for ($i=0; $i < $inputnum; $i++) { 
            echo $i*$i;
            echo "<br>";
        }
    }
     
    
}
echo "<br>";

$nesne = new internet("enessaz.xyz", "saz", "120420", "enes");


echo "<br>";

print_r($nesne);

echo $nesne->write();
echo "<br>";
$nesne->Total(7);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
