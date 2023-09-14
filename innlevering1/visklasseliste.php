<?php

$filnavn = "studenter";

$sok = $_POST["sok"];
$sok = trim($sok);

$filoperasjon ="r";
print("Ditt søkeresultat <br/><br/>");

$fil = fopen($filnavn, $filoperasjon);

while($linj = fgets($fil)){
    if($linj != ""){

        $del= explode(";", $linj);
        $brukernavn = trim($del[0]);
        $fornavn = trim($del[1]);
        $etternavn = trim($del[2]);
        $klassekode = trim($del[3]);

        if($sok == $brukernavn || $sok == $fornavn || $sok == $etternavn || $sok == $klassekode){
            print("$brukernavn $fornavn $etternavn $klassekode <br/>");
        }
    }
}

 fclose($fil);


?>