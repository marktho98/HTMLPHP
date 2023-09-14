<?php

$filnavn = "studenter";
$filoperasjon = "r";

print ("skriv ut dataene <br/><br/>");
$fil = fopen($filnavn, $filoperasjon);

while($linj = fgets($fil)){
    if($linj !=""){

        $del = explode(";", $linj);
        $brukernavn = trim($del[0]);
        $fornavn = trim($del[1]);
        $etternavn = trim($del[2]);
        $klassekode = trim($del[3]);
        print("$brukernavn $fornavn $etternavn $klassekode <br/>");
       

    }
}

fclose($fil);


?>