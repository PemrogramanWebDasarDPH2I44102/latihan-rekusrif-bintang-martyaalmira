

<?php

echo "1. Piramida Angka<br>"
$batas=5;
function rekursif($a =1){
 global $batas;
 echo"*";
  $a++;
  if($a<=$batas){
  	 rekursif($a);
  }
  else{
  	echo "<br>";
  	$batas--;
  	if ($batas!=0){
  		rekursif();
  	}
  }
}
rekursif();

echo "================<br>";

echo "2.Bintang Piramida<br>";
$batasan=1;
function rekursifb($i =1){
 global $batasan;
 echo"$i";
  $i++;
  if($i<=$batasan){
  	 rekursifb($i);
  }
  else{
  	echo "<br>";
  	$batasan++;
  	if ($batasan!=0){
  		rekursifb();
  	}
  }
}
rekursifb();
?>
