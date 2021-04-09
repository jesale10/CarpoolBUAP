<?php

	//|����������������������������������������
	//|	:::::: Documento PHP :::::::
	//|����������������������������������������

	/*
		Estudiantes
		|Escuela: Benem�rita Universidad Aut�noma de Puebla
		|Estudiantes:	Emmanuel Revuelta Rodr�guez
				Hugo Alexis Chiquito Onofre
				Jes�s Alexis Ram�rez Navor
				Mar�a Garc�a Lim�n
				Mario A. N��ez Zavala
		|Facebook: ----
		|Twitter: ----
		|Linked in: ----
		|GitHub: https://github.com/jesale10/CarpoolBUAP
	
		Documento
		|Fecha-documento: 2021-04-08
			
		Descripci�n
		    	Implementar un programa piloto en la Benem�rita
			Universidad Aut�noma de Puebla (BUAP),
			espec�ficamente en el campus de Ciudad Universitaria,
		        un sistema de auto compartido (carpooling).
			Se requiere entonces desarrollar una aplicaci�n orientada a la web
			que permita dicha implementaci�n.
                Consideraciones
			A trav�s de 12 historias de usuario, deducir la dificultad en cada una
			a trav�s del m�todo planning poker, para luego establecer el tiempo
			de desarrollo total de la aplicaci�n, a partir de terminar la primera.		
	        Soluci�n propuesta
			Historias de usuario 1 y 2.
			  P�gina principal con informaci�n general del servicio; con una p�gina de login 
                          y una de registro que solo admite correos institucionales.
		Disign
	   		1. Se crea un formulario que recoge los datos de registro y se a�ade un bot�n
			   que confirma la operaci�n de alta.         	 
	
        */	
	
	# En nuestro archivo index.php, mostraremos las salidas al usuario
	# as� como tamb�en las respuestas emitidas por el controlador a sus solicitudes.
        
        require_once "Controladores/controlador-plantilla.php";
        //require_once "Controladores/controlador-formularios.php";
        require_once "Modelos/modelo-plantilla.php";
        //require_once "Modelos/modelo-formularios.php";
          
        $ctr_plantilla = new ControladorPlantilla();
	$ctr_plantilla -> ctrGetPlantilla();
