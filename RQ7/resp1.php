<?php

echo "Start in;".date('h:i:s').'<br />'; 
$Inicio = 'echo "<rows>" > user_perg.xml';
system ($Inicio);
$f = file("zeor.txt");
foreach($f as $item){
   $comando = 'grep -w \'Id="'.trim($item).'"\' Users.xml >> user_perg.xml';  
   system ($comando);
}
$Final = 'echo "</rows>" >> user_perg.xml';
system ($Final);
system("chmod 777 user_perg.xml");
echo "Stop";

?>
