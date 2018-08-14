<?php

Function csv($inf){
     
   $Final = 'echo '.$inf.' >> resp.txt';
   system ($Final);
  

}


Function mafia($nome){
$link = mysqli_connect("mysql.mps.uni5.net", "mps08", "omega8432","mps08");
$query = "SELECT * FROM ".$nome."_resp";
// echo $query;
echo "<br>< ".$nome." ><br>";
$perg = mysqli_query($link, $query);
while($itens = mysqli_fetch_array($perg, MYSQLI_ASSOC)){
      
        csv($itens['id']);   
       
  }

mysqli_close($link);
}

system("echo  'id' > resp.txt");
mafia("commonality");
mafia("variability");
mafia("decision");
mafia("finteraction");
mafia("fdependencies");
mafia("fmodel");
mafia("fop");
mafia("pl");
mafia("pf");
mafia("vpoint");
mafia("conditional");
mafia("ifdef");
mafia("ifndef");
system("chmod 777 resp.txt");



?>
