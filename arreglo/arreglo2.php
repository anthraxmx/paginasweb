<?php
/**$array=array( 
	0=>array(1=>"Título",2=>"Autor",3=>"Editorial"),
	1=>array(1=>"El medico",2=>"Noah Gordon",3=>"Time Warner")
);**/

LoadData('miarchivo.txt');
function LoadData($file)
    {
    $lines = file($file) or die('Could not open file');
foreach($lines as $line)
        {
        $array[] = explode(';',$line);
		$coinsidencias 		= array();
		$palabra_a_buscar 	= "www.google.com";
		foreach($array as $key=>$value){
			$indice = array_search($palabra_a_buscar,$value);
			if($indice){
				$coinsidencias[]=$value[$indice];
				}
		}
//print_r($coinsidencias);
print_r($array);
		}  
}
?>