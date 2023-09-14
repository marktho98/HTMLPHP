<?php
if(isset($_POST["fortsett"])){
$filnavn="studenter";

$brukernavn=$_POST ["brukernavn"];
$fornavn=$_POST ["fornavn"];
$etternavn=$_POST ["etternavn"];
$klassekode=$_POST ["klassekode"];

if (!$brukernavn ||!$fornavn ||!$etternavn ||!$klassekode)
{
    print ("alle feltene må fylles ut");
}
else
{
$filoperasjon="a"; 
$linje=$brukernavn .";". $fornavn .";". $etternavn .";". $klassekode . "\n";

$fil = fopen($filnavn,$filoperasjon);
fwrite ($fil,$linje);
fclose ($fil);

print ("$brukernavn $fornavn $etternavn $klassekode er nå registrert på fil");
}
}

?>