<?php
$C = $_GET["messaggio_cifrato"];

echo "Messaggio cifrato: $C";
$file = fopen("http://localhost/chiavePrivata.json", "r");
$nuovo = fread($file, filesize("chiavePrivata.json"));
$contenuto = json_decode($nuovo);

$K = $contenuto->K;
$N = $contenuto->N;
function decifratura(int $C, int $K, int $N){
    return pow($C, $K) % $N;
}

echo "<br>Messaggio decifrato: " . decifratura($C, $K, $N);
?>