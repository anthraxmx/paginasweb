<?php
$pagina="www.facebook.com";
LoadData('miarchivo.txt');
function LoadData($file)
    {
    $lines = file($file) or die('Could not open file');
foreach($lines as $line)
        {
        $array[] = explode(';',$line);
		}  
print_r($array);
}
?>
//esta es una prueba
//para verificar 
//como funciona 
//github 
//haciendo modificaciones a este
//archivo