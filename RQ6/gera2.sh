#bash/sh

# 2008
grep '<<row Id="10872"' perguntas.xml > pergunta_e_resposta.xml
grep -w 'ParentId="10872"' resposta.xml >> pergunta_e_resposta.xml


#2009
grep '<<row Id="657477"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="657477"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="794263"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="794263"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="885329"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="885329"' resposta.xml >> pergunta_e_resposta.xml


#2010
grep '<row Id="2016486"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="2016486"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="2087302"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="2087302"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="2432256"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="2432256"' resposta.xml >> pergunta_e_resposta.xml


#2011
grep '<row Id="3753417"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="3753417"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="6181295"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="6181295"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="6564764"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="6564764"' resposta.xml >> pergunta_e_resposta.xml

#2012
grep '<row Id="9337333"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="9337333"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="9486443"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="9486443"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="9731282"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="9731282"' resposta.xml >> pergunta_e_resposta.xml

#2013
grep '<row Id="14277751"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="14277751"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="14477522"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="14477522"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="14593843"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="14593843"' resposta.xml >> pergunta_e_resposta.xml


#2014
grep '<row Id="21444584"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="21444584"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="21752456"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="21752456"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="21861814"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="21861814"' resposta.xml >> pergunta_e_resposta.xml


#2015
grep '<row Id="31437922"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="31437922"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="31618999"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="31618999"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="31663701"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="31663701"' resposta.xml >> pergunta_e_resposta.xml

#2016
grep '<row Id="34866320"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="34866320"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="35298575"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="35298575"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="35995822"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="35995822"' resposta.xml >> pergunta_e_resposta.xml

#2017
grep '<row Id="42336325"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="42336325"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="42367960"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="42367960"' resposta.xml >> pergunta_e_resposta.xml
grep '<row Id="42513002"' perguntas.xml >> pergunta_e_resposta.xml
grep -w 'ParentId="42513002"' resposta.xml >> pergunta_e_resposta.xml


sed -i "1s/^/<rows>\n/" pergunta_e_resposta.xml


echo "</rows>" >> pergunta_e_resposta.xml


