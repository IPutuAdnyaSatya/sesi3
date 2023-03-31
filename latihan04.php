<?php

    function tentangaplikasi(){
        echo"<h3>aplikasi apasaja</h3>";
        echo"<sup>versi 1.0</sup>";
    }

    function cetaklabel01($tx){
        echo "isi label ".$tx;
    }

    function cetaklabel02($tx="isikan lebel"){
        echo "isi lebel: ",$tx;
    }

    function jumlahkan ($ank1=0, $ank2=0){
        return $ank1+$ank2;
    }