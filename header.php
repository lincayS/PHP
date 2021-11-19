<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   



<?php


function desing($tab){


    
    for ($i=0; $i<1; $i++) {
        return $tab[rand(0, count($tab) - 1)];
    }
    }


 $adress=array("9400 Créteil","75012 Paris","875 Lille","2344 Bordeaux","4553 Marseille")   
?>
<div id="div">
<div>
<?php
$addnm=rand(1,80);
$add=desing($adress);
echo "Mon entreprise"."<br />".$addnm.
" avenue de la republique "."<br />".$add;
?>
</div>

<div>
<?php
echo "Facture n° ".rand(900,1000).
"<br />"."Date : ".rand(1,30)."/".rand(1,12)."/".rand(2015,2021);
?>
</div>
<div>
<?php
echo "Entreprise cliente"."<br />".rand(1,80).
" avenue de la republique "."<br />".desing($adress);
?>
</div>


<button>Imprimer cette page</button>

</div>
    
