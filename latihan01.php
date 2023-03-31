<?php 

$cars = array("volvol","BMW","Toyota","Daihatsu");

$jmldta = count($cars);
echo"jumlah data : ".$jmldta . "<br>";
for($i=0;$i<3;$i++){
    echo"<br>kendaraan ". $cars[$i];
}
 
echo"<br>";
 
echo "<ol class=\"mobil\">";
foreach($cars as $dta){
    echo "<li>kendaraan" . $dta . "</li>";
}
echo "</up>";