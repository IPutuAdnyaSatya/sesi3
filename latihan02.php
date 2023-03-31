<?php
   $age = array("peter"=>"35","ben"=>"37","joe"=>"43");

   echo "umur dari peter".$age["joe"]. "tahun <br>";

   echo "<br>";

   foreach($age  as $nama => $umur){
        echo "umur dari " . $nama . " :" .$umur . "<br>";
   } 