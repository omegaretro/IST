# Variability Implementation at Stack Overflow: An Empirical Study

## Abstract

An empirical investigation aiming at understanding how the theme "variability implementation" is discussed by the community of Information Technology professionals who use the Stack Overflow site is presented. A list of 52 words related to this theme was defined based on the literature of the area and the opinion of experts. They were then used as the initial vocabulary for the algorithm that implements the Latent Dirichlet Allocation (LDA) to find the main topics related to variability implementation, as well as to validate the words in the list.   The most used words have been used to select questions containing them. These questions have been inspect manually and in the end 1962 were accepted. These 1962 questions were then analyzed with the objective of discover the mechanisms of variability implementation more discussed, less discussed and not discussed; what is the delay in responding to the formal questions on variability implementation and how long the discussions last; and finally, what is the profile of Stack Overflow users who asked and answered the questions retrieved, as well as the degree of confidence one can have about the quality of the questions and answers presented. 

## Keyword
Variability implementation, Reuse, Stack Overflow, Software Product Line, Latent Dirichlet Allocation.


## Authors
Marco A. Paranhos Silva, Jonatas Ferreira Bastos, Paulo Anselmo da Mota Silveira Neto, Paulo Cesar Masiero, Eduardo Santana de Almeida


## Introduction

Stack Overflow (StOv) is an online platform where users can share knowledge by asking or answering questions. The area of software engineering -- as well as other areas of computer science -- currently uses this type of information source to solve doubts and share knowledge. It is also a  social network that brings together people with a common interest. The StOv dataset has relevant information in the area of software engineering since 2008, when it began its operation. Analyzing the content of this data set can help to better understand the thoughts, doubts, and needs of software developers. Questions asked by practitioners can be understood as the difficulties they face in their work.

The main experimental research papers related to the study of variability implementation and management focused on systematic mappings or research  present in their studies a relatively small number of participants when compared to the active community in StOv \cite{babar-10}. By investigating the StOv dataset, we can investigate topics related to implementation the variability in the context of SPLs and thereby identify which difficulties the developers have reported and which are most often used terms, concepts and techniques.

There are several studies published using the StOv content with several questions that have been asked and answered in the field of software engineering related to different themes, such as: mobile software development, program design and programming technologies \cite{treude-11, mamykina-11, barua-14, venkatesh-16}. However, studies on the implementation of variability in the context of Software Product Lines and, more generally, the use of the concepts of variability implementation (and associated techniques)  for code reuse have not yet been done to the best of our knowledge. 

In order to have a solid ground to base  our research, we did not find any study in the area with the amount of information that can be found in the StOv dataset, since the platform has a total of 7.3 million registered users, who can ask and answer questions, comment and vote. On the other hand, analyzing the textual content of such a large repository of knowledge poses a number of challenges. One is that the total volume of data prohibits manual analysis. In addition, the unstructured nature of formulated questions and answers that are written in natural language and mixed with pieces of code render inefficient the most conventional data mining techniques \citep{barua-14}.

 In order to overcame, a retrieval algorithm called Latent Dirichlet Allocation (LDA) was be used to find relevant topics  in the StOv dataset about the implementation of variability in software development. LDA is considered the most appropriate for the purpose of finding natural discussion topics in text documents \cite{blei-03}. Additionally,  we retrieve questions that contain  relevant search keywords  and individually analyze their content to validate them and search for trends, patterns and results of general interest.

Therefore, the main objective of this paper is to analyze the data set of the StOv web site to identify what developers and users have commented, questioned or answered about the implementation of variability in SPL. This will be done based on a set of research questions to investigate
%
what are the  mechanisms of implementation of variability more discussed, less discussed and not discussed; what is the delay in answering to the formal questions on implementation of variability and how long the discussions last; and finally, what is the profile of StOv users who asked and answered the questions this type of questions. 

This paper is organized as follows. Section \ref{background} presents  background information to the research problem main approaches. They describe  main functionalities of the site StOv and the main concepts of variability implementation. Section \ref{relatedwork} presents related work on researches with StOv, reuse and variability implementation.  Section \ref{lda} presents the experimental results obtained using LDA to recover topics. Section \ref{rq3} investigates the existence of variability implementation mechanisms in StOv, Section \ref{delay} analyses the time delay for the first answer to question on variability implementation mechanisms and the discussion duration, Section \ref{moda} instigates which are the words more frequent and less frequent used by the StOv community to write questions and answers related to variability implementation mechanisms, and Section \ref{profile} investigates de users profiles and how reliable are their questions and answers. A discussion of the results found and concluding remarks are presented in Sections \ref{discussion} and \ref{conclusion}, respectively.


## Creation of offine datasets to support searches

