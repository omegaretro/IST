# An Empirical Study of questions on variability implementation mechanisms in Stack Overflow.

This web page presents the supplementary material of the paper *Variability Implementation: An Empirical Study of Stack Overflow Posts*.

## Abstract

Context: Stack Overflow is an online platform where users can share knowledge by asking or answering questions. Analyzing its database content can help to better understand the thoughts, doubts, and needs of software developers.

Objective: Use a dataset of the Stack Overflow platform to identify and analyze what developers and users have asked and answered about variability implementation mechanisms.

Method: A list of 52 words was defined based on the literature and the authors’ knowledge. They were used to retrieve questions containing them. These have been inspected manually and 1962 were chosen. They were then analyzed to answer five research questions.

Results: Identification of variability implementation mechanisms  more discussed, less discussed and not discussed; the delay to answer formal questions on variability implementation; how long the discussions last; and what is the profile of Stack Overflow users who asked and answered the questions retrieved.

Conclusion: A small part of the Stack Overflow community is aware of variability implementation mechanisms. Most of the questions retrieved are related to programming-in-the-small and refer to conditional compilation (e.g. ifdef, ifndef), reuse and software product lines. The results may motivate the need for an educational effort to raise the level of knowledge of practitioners regarding variability implementation mechanisms. 

## Keyword
Variability implementation, Reuse, Stack Overflow, Software Product Line.


## Authors
Marco A. Paranhos Silva, Jonatas Ferreira Bastos, Paulo Anselmo da Mota Silveira Neto, Paulo Cesar Masiero, Eduardo Santana de Almeida


## Research Design

* Diagrama-1, methodology used

![Image of Diagram 1](IST%20Stackoverflow-Figure.jpg)



## Reseach Questions

In this paper we answer the following research questions:

* RQ1: Are variability implementation mechanisms discussed in StOv?
* RQ2: Which variability implementation mechanisms are most discussed in StOv?
* RQ3: Which variability implementation mechanisms are not discussed in StOv?
* RQ4: How fast is the crowd covering variability implementation mechanism?
* RQ5: Can we rely on the StOv crowd?

In the file wlist123 there is a list of the 123 initial words of the study.

| List of 52 initial Words | 
:------------: |
|aggregation, ahead, aspectorientedprogramming, aspectweaving, variant| 
|bindingtime, collectionofvariants, commonality, composition, conditionalcompilation| 
|conditiononconstant, conditiononvariable, configuration, constraintprogramming, decisionmodel| 
|delegation, derivation, designfeatures, dynamicclassloading, dynamiclinklibraries| 
|dynamicvariability, featuredependencies, featureide, featureinteraction, featuremodel|
|featuremodeling, foda, fop, frames, framework| 
|functionalityforbinding, ifdef, ifndef, inheritance, instatiation|
|interface, makefile, modularfeature, operationaldependencies, overloading| 
|parameterization, productfamily, productline, reflection, reuse| 
|staticlibraries, variability, variabilityinspace, variabilitymanagement, variabilityscope|  
|variantfeature, variationpoint|


To answer RQ's, we combine the words according to the Table below and thus retrieve from the dataset the questions that result in the [Result.xml](result.xml) file containing the questions retrieved.

| Word     |  Combination |
:------------: | :------------ |
|“commonality”   |“variant”     |                    
|“commonality”   |“variant”     |                      
|“commonality”    |“aggregation”      |              
|“commonality”     |“parameterization”      |     
|“commonality”    |“reflection”             |          
|“commonality”    |“decision model”        |      
|“commonality”     |“feature interaction”     |   
|“commonality”    |“feature dependencies”     |
|“commonality”   |“feature model”      |          
|“commonality”   |“product line”    |               
|“commonality”   |“product family”     |          
|“commonality”  |“variation point”     |           
|“commonality”   |“conditional compilation”  |
|“commonality”    |“design pattern” |               
|“commonality”    |“ifdef”  |                              
|“commonality”     |“ifndef”       |
|   |   |
|“variability”    |“aggregation”      |              
|“variability”     |“parameterization”      |     
|“variability”    |“reflection”             |          
|“variability”    |“decision model”        |      
|“variability”     |“feature interaction”     |   
|“variability”    |“feature dependencies”     |
|“variability”   |“feature model”      |          
|“variability”   |“product line”    |               
|“variability”   |“product family”     |          
|“variability”  |“variation point”     |           
|“variability”   |“conditional compilation”  |
|“variability”    |“design pattern” |               
|“variability”    |“ifdef”  |                              
|“variability”     |“ifndef”       |
|   |   |
|“variability”   |“variant”     |                      
|“variability”    |“aggregation”      |              
|“variability”     |“parameterization”      |     
|“variability”    |“reflection”             |          
|“variability”    |“decision model”        |      
|“variability”     |“feature interaction”     |   
|“variability”    |“feature dependencies”     |
|“variability”   |“feature model”      |          
|“variability”   |“product line”    |               
|“variability”   |“product family”     |          
|“variability”  |“variation point”     |           
|“variability”   |“conditional compilation”  |
|“variability”    |“design pattern” |               
|“variability”    |“ifdef”  |                              
|“variability”     |“ifndef”       |                      
|   |   |
|“variant”    |“aggregation”   |                 
|“variant”   |“delegation”    |                   
|“variant”     |“parameterization” |           
|“variant”    |“reflection”      |              
|“variant”   |“decision model”       |        
|“variant”     |“feature interaction”     |   
|“variant”    |“feature dependencies”     |
|“variant”   |“feature model”      |            
|“variant”   |“product line”      |               
|“variant”   |“product family”   |              
|“variant”  |“variation point”  |                
|“variant”   |“conditional compilation”  |
|“variant”    |“design pattern”      |          
|“variant”    |“ifdef”       |                        
|“variant”     |“ifndef”         |                     
|   |   |
|“aggregation”   |“delegation”     |                  
|“aggregation”     |“parameterization”|            
|“aggregation”    |“reflection”          |             
|“aggregation t”   |“decision model”       |         
|“aggregation”     |“feature interaction”   |        
|“aggregation”    |“feature dependencies” |       
|“aggregation”   |“feature model”    |                
|“aggregation”   |“product line”      |                 
|“aggregation”   |“product family”    |              
|“aggregation”  |“variation point”      |             
|“aggregation”   |“conditional compilation” |   
|“aggregation”    |“design pattern” |                
|“aggregation” |“ifdef”      |                           
|“aggregation”     |“ifndef”      |                        
|   |   |
|“delegation”     |“parameterization”    |         
|“delegation”    |“reflection”           |             
|“delegation”   |“decision model”         |         
|“delegation”     |“feature interaction”   |        
|“delegation”    |“feature dependencies”  |      
|“delegation”   |“feature model”      |               
|“delegation”   |“product line”     |                   
|“delegation”   |“product family”    |              
|“delegation”  |“variation point”      |             
|“delegation”   |“conditional compilation”     |
|“delegation”    |“design pattern”     |           
|“delegation”    |“ifdef”  |                               
|“delegation”     |“ifndef”     |                         
|    |  |
|“parameterization”    |“reflection”      |                  
|“parameterization”   |“decision model”           |      
|“parameterization”     |“feature interaction”   |        
|“parameterization”    |“feature dependencies” |       
|“parameterization”   |“feature model”       |              
|“parameterization”   |“product line”       |                
|“parameterization”   |“product family”     |               
|“parameterization”  |“variation point”     |                
|“parameterization”   |“conditional compilation” |    
|“parameterization”    |“design pattern”     |              
|“parameterization”    |“ifdef”     |                             
|“parameterization”     |“ifndef”     |                          
|   |   |
"reflection”   |“decision model”         |         
|“reflection”     |“feature interaction”       |    
|“reflection”    |“feature dependencies”       | 
|“reflection”   |“feature model”          |           
|“reflection”   |“product line”        |                
|“reflection”   |“product family”        |            
|“reflection”  |“variation point”        |             
|“reflection”   |“conditional compilation” |    
|“reflection”    |“design pattern”   |                
|“reflection”    |“ifdef”       |                           
|“reflection”     |“ifndef”         |                      
|   |   |
|“decision model”     |“feature interaction”   |        
|“decision model”    |“feature dependencies”     |   
|“decision model”   |“feature model”          |           
|“decision model”   |“product line”      |                  
|“decision model”   |“product family”         |           
|“decision model”  |“variation point”              |       
|“decision model”   |“conditional compilation”      |
|“decision model”    |“design pattern”    |               
|“decision model”    |“ifdef”     |                             
|“decision model”     |“ifndef”     |                         
|   |   |
|“feature dependencies”   |“feature model”      |               
|“feature dependencies”   |“product line”       |                 
|“feature dependencies”   |“product family”      |              
|“feature dependencies”  |“variation point”        |             
|“feature dependencies”   |“conditional compilation” |    
|“feature dependencies”    |“design pattern”       |            
|“feature dependencies”    |“ifdef”              |                    
|“feature dependencies”     |“ifndef”            |                   
|    |   |
|“feature model”   |“product line”  |                      
|“feature model”   |“product family” |                   
|“feature model”  |“variation point”    |                 
|“feature model”   |“conditional compilation” |    
|“feature model”    |“design pattern”    |               
|“feature model”    |“ifdef”   |                               
|“feature model”     |“ifndef”  |                             
|   |   |
|“product line”   |“product family”  |                    
|“product line”  |“variation point”       |                
|“product line”   |“conditional compilation”    |   
|“product line”    |“design pattern”         |            
|“product line”    |“ifdef”               |                     
|“product line ”     |“ifndef”            |                     
|   |   |
|“product family”  |“variation point”   |                    
|“product family”   |“conditional compilation”  |     
|“product family”    |“design pattern”         |            
|“product family”    |“ifdef”              |                     
|“product family”     |“ifndef”            |                     
|  |   |
|“variation point”   |“conditional compilation”       |
|“variation point”    |“design pattern”        |             
|“variation point”    |“ifdef”    |                            
|“variation point”   |“conditional compilation” |
|   |   |
|“conditional compilation”    |“design pattern”      |              
|“conditional compilation”    |“ifdef”     |                               
|“conditional compilation”     |“ifndef”  |                               
|   |    |      
|“design pattern”    |“ifdef”  |                                 
|“design pattern”     |“ifndef”  |                              
|    |   |
|“ifdef”     |“ifndef”|                                

We developed a dataset in [SQL](RQ6/mps08.sql) so that we can answer the RQ4 and compare the algorithms in [PHP](RQ6/estudo.php)  to determine the results.

Finishing then we have the database [users](RQ7/usuarios.sql) that was used to respond to RQ5, to analyze the data we use the following algorithms: [resp.php](RQ7/resp.php), [resp1.php](RQ7/resp1.php) and [resp2.php](RQ7/resp.php). 


## References

M. D. Hoffman, D. M. Blei, F. Bach, Online learning for latent dirichlet allocation, NIPS’10, 2010, pp. 856–864.

L. Mamykina, B. Manoim, M. Mittal, G. Hripcsak, B. Hartmann, Design lessons from the fastest q&a; a site in the west, ACM, 2011, pp. 2857–2866.

C. Parnin, C. Treude, L. Grammel, Crowd documentation: Exploring the coverage and the dynamics of API discussions on
stack overflow, Georgia Institute of Technology Technical Report GIT-CS-12-05 (2012).

M. Linares-Vásquez, B. Dit, D. Poshyvanyk, An exploratory analysis of mobile development issues using stack overflow, 2013, pp. 93–96.

C. Chen, Z. Xing, Mining technology landscape from stack overflow, ESEM ’16, 2016, pp. 14:1–14:10.

[M. A. P. Silva, Variability implementation at stack overflow: An empirical study, Master’s thesis, Federal University of Bahia
(2018)](Marco_msc_dissertation.pdf).
  
