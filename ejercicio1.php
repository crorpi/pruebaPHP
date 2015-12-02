<?php
$nombres=array("roberto","juan","marta","maria","martín","jorge","miriam","nacho","mila");
$contador=0;
for ($i=0; $i < sizeof($nombres);$i++) {
$n=$nombres[$i];
	if ($n[0] == "m") {
		$nombresM[$contador]=$n;
		$contador++;
	}


}

for ($i=0; $i <sizeof($nombresM)-1;$i++) { 
	echo "$nombresM[$i], ";
}
echo $nombresM[$i];
?>