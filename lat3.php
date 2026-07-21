<?php
$siswa="FERANO";
$matkuliah="PHP";
$nilai=80;//nilai yang diinput

//jika nilai >=60 maka lulus, selain itu gagal
//ternary
$keterangan=($nilai>=60) ? "lulus" : "gagal";

echo "<hr>";
//fungsi if
//jika nilai >=85 dan <=100 maka A,
// //jika nilai >=75 dan <85 maka B,
// //jika nilai >=60 dan <75 maka C,
// //jika nilai >=50 dan <60 maka D,
// //selain itu E
if($nilai>=85 && $nilai<=100){
    $grade="A";
}
else if($nilai>=75 && $nilai<85){
    $grade="B";
}
else if($nilai>=60 && $nilai<75){
    $grade="C";
}
else if($nilai>=50 && $nilai<60){
    $grade="D";
}
else{
    $grade="E";
}

//fungsi switch case
//jika grade A maka predikat sangat memuaskan,
//jika grade B maka predikat memuaskan,
//jika grade C maka predikat cukup,
//jika grade D maka predikat kurang,
//selain itu predikat hancur

switch($grade){
    case "A":
        $predikat="sangat memuaskan";
        break;
    case "B":
        $predikat="memuaskan";
        break;
    case "C":
        $predikat="cukup";
        break;
    case "D":
        $predikat="kurang";
        break;
    default:
        $predikat="hancur";
}






echo "<hr>";
//cetak hasil ulangan
echo  $siswa. '<br>';
echo  $matkuliah. '<br>';
echo  $nilai. '<br>';
echo  $keterangan. '<br>';
echo  $grade. '<br>';
echo  $predikat. '<br>';

?>