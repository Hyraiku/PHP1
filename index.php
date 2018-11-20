<?php 

//echo "Coucou" ;

/*
La fonction var_dump est une fonction de debug qui donne des infos concernant notre entrée de caractère
*/



var_dump("Coucou bibi") ; 
var_dump('unexpected_error') ; 

// name <- "bob dit l'ane"
$name = "bob dit l'ane";

//debug de la variable name
var_dump($name);


//ici on fais la concaténation 
var_dump("coucou$name") ;
var_dump("coucou". $name) ;

////////////////////////////////////////////
//ici on fait des addition avec des variables 
$a = 10 ;
$b = 14 ;
var_dump("16") ;

/* SI B > 15 ALORS 
		ACTION
   FIN SI	  */

if ($b > 15) {
	var_dump("supp à 10") ;
}

if ($b == 10) {
	var_dump("Ok pour 10") ;
} else if ($b == 15){
	var_dump("Ok pour 15") ;
} else {
	var_dump("gros nul") ;
}

////////////////////////////////////////////

// T[10] <- 1, 2, 30 , 40 ...

$t = array(1, 100, 3,65);

//var_dump($t); 

var_dump($t [0]);

//t[3] <- 1234 
var_dump($t);

/* POUR I ALLANT DE 0 A 9 PAR PAS DE 1
ACTION 
FINPOUR */

$i;
$t;
for($i = 0; $i < 9; $i++) {
	var_dump("t[$i] =>" . $t[$i]);
}







