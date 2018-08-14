<?php

echo "Start in;".date('h:i:s').'<br />'; 
$Inicio = 'echo "<rows>" > respi.xml';
system ($Inicio);
$f = file("inicio.txt");
foreach($f as $item){
   $comando = 'grep -w \'Id="'.trim($item).'"\' perguntas.xml >> respi.xml';  
   system ($comando);
}
$Final = 'echo "</rows>" >> respi.xml';
system ($Final);
system("chmod 777 respi.xml");
echo "Stop";

echo "Start in;".date('h:i:s').'<br />'; 
$Inicio = 'echo "<rows>" > respm.xml';
system ($Inicio);
$f = file("meios.txt");
foreach($f as $item){
   $comando = 'grep -w \'Id="'.trim($item).'"\' perguntas.xml >> respm.xml';  
   system ($comando);
}
$Final = 'echo "</rows>" >> respm.xml';
system ($Final);
system("chmod 777 respm.xml");
echo "Stop";


echo "Start in;".date('h:i:s').'<br />'; 
$Inicio = 'echo "<rows>" > respu.xml';
system ($Inicio);
$f = file("ultimas.txt");
foreach($f as $item){
   $comando = 'grep -w \'Id="'.trim($item).'"\' perguntas.xml >> respu.xml';  
   system ($comando);
}
$Final = 'echo "</rows>" >> respu.xml';
system ($Final);
system("chmod 777 respu.xml");
echo "Stop";


?>
