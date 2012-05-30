<?php
$pagina="www.google.com.mx";
//$archivo = 'miarchivo.txt';
//$handle = fopen($file, 'r'); // abro como lectura
//$dato = fread($handle, filesize($archivo));
//fclose($handle);
//$array = explode(';', $dato); //creo un array contando cada espacio que haya en el renglon
//print_r($array);

$fp=fopen("miarchivo.txt", 'r'); // returns a file pointer, and save it in a variable for future use.
$text = fread($fp, filesize("miarchivo.txt"));
$text = nl2br ($text);
print ("$text");
fclose ($fp);  
/**
foreach ($array==$comparar)
{
	if($compara==$pagina)
	{
		echo $pagina;
	}
}**/
?>