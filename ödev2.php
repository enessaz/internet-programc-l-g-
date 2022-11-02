<?php

use Sinif as GlobalSinif;

    class Sinif{
        
        public function __construct(){
            $welcome=" Giriş Mesajı Çalıştı.(Construct Metodu)";
            echo $welcome;
            echo "<br>";
        }

        public function __destruct()
        {
            echo "Yıkıcı metot çalıştı.(Destruct Metot)";
            echo "<br>";
        }

        public function Grade($vize,$final){
            $vize=62;
            $final=86;
            
            $not=$vize*0.3 + $final*0.7;
            
            if ($not>=50) {
                echo "Dersten geçtiniz,notunuz: " . $not;  
                echo "<br>";  
            }
            else{
                echo "Dersten Kaldınız";
                echo "<br>";
            }
        }

        public function factoriel($num){
            $faktoriyel=1;
           for ($i=1; $i <= $num; $i++) { 
            $faktoriyel=$i*$faktoriyel;
           }
           echo "$num'ın faktöryeli ".$faktoriyel;
           echo "<br>";
        }
    }

    $myClass = new Sinif();
    $myClass->Grade(50,80);
    $myClass->factoriel(4);
?>