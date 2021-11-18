<?php
include "header.php"
?>


<?php
$designation=array("jus","coca","eau","dessert","gateux","lait",);


$prix=nb(10,60);
$quant=nb(1,20);
$total=$prix*$quant;





function afficher($array){
foreach ($array as $key=>$value)
{
    echo "<div>";
echo "<div class='bor' id='bleu'>";
    echo "  ".$key;
    echo"</div>";

    echo "<div class='bor'>";

    echo $value;

    echo"</div>";

echo "</div>";


}
}

$tab["Référence"]=nb(1000,2000);
$tab["désignation"]=desing($designation);
$tab["prix u"]=$prix;
$tab["quantité"]=$quant;
$tab["prix total"]=$total;
$tab["total"]=$total*1.2;


$tab2["Total HT"]=$total;
$tab2["TVA"]=$total/0.8;
$tab2["Total"]=$total*1.2;


echo "<div id='tab'>";
afficher($tab);
echo "</div>";

echo "<div id='tab2'>";
afficher($tab2);
echo "</div>";


?>



<?php
include "footer.php"
?>