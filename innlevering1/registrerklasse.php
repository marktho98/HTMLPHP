


<?php

if(isset($_POST["fortsett"])){
$filnavn="klasse";

$klassekode=$_POST["klassekode"];
$klassenavn=$_POST["klassenavn"];
$studiumkode=$_POST["studiumkode"];

if (!$klassekode ||!$klassenavn ||!$studiumkode)
{
    print ("alle feltene må fylles ut");
}
else
{
$filoperasjon="a"; 
$linje=$klassekode .";". $klassenavn .";". $studiumkode . "\n";

$fil = fopen($filnavn,$filoperasjon);
fwrite ($fil,$linje);
fclose ($fil);

print ("$klassekode $klassenavn $studiumkode er nå registrert på fil");
}
}
?>