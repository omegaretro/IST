<?php

Function csv($inf,$inf2){
     
   $Final = 'echo '.$inf.','.$inf2.' >> ultima.csv';
   system ($Final);
  

}

Function mafia($nome){
$link = mysqli_connect("mysql.mps.uni5.net", "mps08", "omega8432","mps08");
$query = "SELECT * FROM ".$nome."_resp , ".$nome."_perg WHERE ".$nome."_perg.id = ".$nome."_resp.parentalid";
// echo $query;
echo "<br>< ".$nome." ><br>";
$perg = mysqli_query($link, $query);
$tper = 0;
while($itens = mysqli_fetch_array($perg, MYSQLI_ASSOC)){
       // if ( $itens['answ']  > 1){
             $total = $total + 1; 
             if ($itens['id'] == $itens['parentalid']){
                     if ($total == 1){
                              $pergunta = $itens['datap']." ".$itens['timep'];
                              $resposta1 = $itens['datar']." ".$itens['timer'];
                              $tper = $tper + 1;
                            
                            
                       }
                     if ($total == $itens['answ']){
                                 $resposta2 = $itens['datar']." ".$itens['timer'];
                                 $total = 0;
                                //  echo " Pergunta id: ".$itens['id'].", total de respostas: ".$itens['answ']."<br>";
                                 $subi = (strtotime($resposta1)- strtotime($pergunta));
                                 $diasi = round(($subi/60/60/24));
                                 $hrsi = round(($subi/60/60));
                                 $minsi = round(($subi/60));
                                     
                                 if ($minsi > 60)  $minsi = round(($minsi%60));
                                 if ($diasi == 0){    
                                     
                               //   echo "Tempo para primeira resposta: ".$hrsi.":".$minsi." h.<br>";
                                 }else{
                               //    echo "Tempo para primeira resposta: ".$diasi." Dias e ".date('H:i',$resposta1)." h.<br>";
                                 }
                                
                                 $subpf = (strtotime($resposta2)- strtotime($pergunta));
                                 $diaspf = round(($subpf/60/60/24));
                                 $hrspf = round(($subpf/60/60));
                                 $minspf = round(($subpf/60));
                                 if ($minspf > 60)  $minspf = round(($minspf%60));

                                 if ($diaspf == 0){
                                    
                                   // echo "Tempo para ultima resposta: ".$hrspf.":".$minspf." h.<br><br>";
                                 }else{
                                    if ($diaspf >= 365){ 
                                    $anospf = round($diaspf/354);
                                   //   echo "Tempo para ultima resposta maior ou igual a: ".$anospf." Anos <br><br>";
                                    }else{
                                   //    echo "Tempo para ultima resposta: ".$diaspf." Dias e ".date('H:i',$resposta2)." h.<br><br>";
                                     }
                                 } 

                                 
                                 $subf = (strtotime($resposta2) - strtotime($resposta1));
                                 $diasf = round(($subf/60/60/24));
                                 $hrsf = round(($subf/60/60));
                                 $minsf = round(($subf/60));
                                 if ($minsf > 60)  $minsf = round(($minsf%60));
                                 if ($diasf == 0){
                                    
                                  //  echo "Duração da conversa: ".$hrsf.":".$minsf." h.<br> <br>";
                       
                                 }else{
                                     if ($diasf >= 365){ 
                                      $anosf = round($diasf/365);
                                   //   echo "Duração da conversa maior ou igual a: ".$anosf." Anos <br><br>";
                                    }else{
                                  //    echo "Duração da conversa: ".$diasf." Dias e ".date('H:i',$resposta2)." h.<br> <br>";
                                    }

                                 }
                                 $env1 = ($hrsi * 60) + $minsi;
                                 $env2 = ($hrspf * 60) + $minspf;
                                 $env = ($env2 - $env1);
                                 if ($env < 0) $env = $env * (-1);
                                 if ($env1 > 180 ) csv($itens['id'],$env1);
                                
                               
                       }
                    
                       
                               
                   
               }
              
   
               $tudoi = $tudoi + $subi;
               $tudopf = $tudopf + $subpf;
               $tanospf = $tanospf + $anospf;
               $tudof = $tudof + $subf;
               $tanosf = $tanosf + $anosf;
               $soma = $soma + 1;
  
    //  }        //  echo $total."<br>";
       
}


$diast = round(($tudoi/60/60/24));
$hrst = round(($tudoi/60/60));
//if ($hrst > 60)  $hrst = round(($hrst%60));
$med = round(($diast / $tper ));
$media = round(($hrst / $tper ));

echo "Somatorios das perguntas para as primeiras respostas: <br>";
echo "Total de dias: ".$diast." Total de horas: ".$hrst."<br>";
echo "Total de Perguntas: ".$tper."  Média: ".$med." dias e ".$media." h. <br>";
echo "Total de respostas: ".$soma."<br>";


$diastpf = round(($tudopf/60/60/24));
$hrstpf = round(($tudopf/60/60));
$medpf = round(($diastpf / $tper ));
$mediapf = round(($hrstpf / $tper ));

echo " <br> Somatorios das perguntas para  as ultimas respostas: <br>";
echo "Total de dias: ".$diastpf." Total de horas: ".$hrstpf."<br>";
echo "Total de respostas: ".$soma."  Média: ".$medpf." dias e ".$mediapf." h. <br>";

$diastf = round(($tudof/60/60/24));
$hrstf = round(($tudof/60/60));
$medf = round(($diastf / $tper ));
$mediaf = round(($hrstf / $tper));

echo "<br> Tempo de conversa: (somatorios entre as primeiras respostas e as ultimas respostas) <br>";
echo "Total de dias: ".$diastf." Total de horas: ".$hrstf."<br>";
echo "Total de respostas: ".$soma."  Média: ".$medf." dias e ".$mediaf." h.<br>"; 

mysqli_close($link);
}

system("echo  'id,time' > ultima.csv");
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
system("chmod 777 ultima.csv");



?>
