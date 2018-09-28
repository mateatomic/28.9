<?php
/**
Max temp,min temp,prosjecna temp svakog mjeseca
 */
$lista =Array(Array("Sijecanj","Max_temp","Min_temp","Prosjecna_temp","Veljaca","Max_temp","Min_temp","Prosjecna_temp","Ozujak","Max_temp","Min_temp","Prosjecna_temp",
    "Travanj","Max_temp","Min_temp","Prosjecna_temp","Svibanj","Max_temp","Min_temp","Prosjecna_temp","Lipanj","Max_temp","Min_temp","Prosjecna_temp","Srpanj","Max_temp","Min_temp","Prosjecna_temp","Kolovoz","Max_temp","Min_temp","Prosjecna_temp","Rujan","Max_temp","Min_temp","Prosjecna_temp","Listopad","Max_temp","Min_temp","Prosjecna_temp","Studeni","Max_temp","Min_temp","Prosjecna_temp","Prosinac","Max_temp","Min_temp","Prosjecna_temp");
$a=Array(1,2,3,4,5,6,7,8,9,10,11,12);
echo "najmanja_temp:".min($a)."<br>");
echo "najveca_temp:".max($a)."<br>");
echo "prosjecna_temp:".(array_sum($a)/count($a))."<br>";
?>




