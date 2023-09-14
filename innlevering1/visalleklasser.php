<?php

$filnavn = "klasse";
$filoperasjon = "r";

print ("skriv ut dataene <br/><br/>");
$fil = fopen($filnavn, $filoperasjon);

while($linj = fgets($fil)){
    if($linj !=""){

        $del = explode(";", $linj);
        $klassekode = trim($del[0]);
        $klassenavn = trim($del[1]);
        $studiumkode = trim($del[2]);
        print("$klassekode $klassenavn $studiumkode <br/>");
       

    }
}

fclose($fil);


?>