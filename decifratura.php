<?php
$C = $_GET["messaggio_cifrato"];

echo "Messaggio cifrato: $C";
$file = fopen("https://francescofollatello.github.io/progetti_js/chiavePrivata.json", "r");
$nuovo = fread($file, filesize("https://francescofollatello.github.io/progetti_js/chiavePrivata.json"));
$contenuto = json_decode($nuovo);

$K = $contenuto->K;
$N = $contenuto->N;
function decifratura(int $C, int $K, int $N){
    return pow($C, $K) % $N;
}

echo "<br>Messaggio decifrato: " . decifratura($C, $K, $N);
?>