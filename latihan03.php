<?php 

    $mhs = array(
        array("NAMA"=>"janoo","id"=>"1234","kota"=>"pakistan kaja"),
        array("NAMA"=>"arwana","id"=>"3234","kota"=>"pakistan bedelodan"),
        array("NAMA"=>"alitsugigi","id"=>"0234","kota"=>"pakistan baleran tengah"),
        array("NAMA"=>"chomeng","id"=>"6666","kota"=>"india kaja"),       
    );
    echo $mhs[1]["NAMA"];
    echo "<hr>";
    print_r($mhs);
    echo "<hr>";

    foreach($mhs as $dta){

        foreach ($dta as $Ib => $inval){
            echo $Ib. " :". $inval. "<br>";
            echo "<hr>";
        }
        echo "<br>";
    }
    echo "<hr>";

    header("content-type: application/json");
    echo json_encode($mhs);