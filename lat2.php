<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM INPUT KTP</title>
</head>
<body>
    <form action=""method="get">
        Masukan umur:
        <input type="text" name="umur">
        <input type="submit" name="proses" value="proses">
        </form>
<?php
//SOAL IF:
//JIKA UMUR >=50 TAHUN, DAPAT KTP LANSIA
//JIKA UMUR >=40 TAHUN,dan <49 DAPAT KTP PRALANSIA
//JIKA UMUR LEBIH 30 TAHUN, DAPAT KTP DEWASA
//JIKA UMUR LEBIH 18 TAHUN, DAPAT KTP REMAJA
//JIKA UMUR LEBIH 5 TAHUN, DAPAT KTP ANAK
//SELAIN ITU TIDAK DAPAT


if(isset($_GET['proses'])){
$umur=$_GET['umur'];//data yang diimput
if($umur>50){
    echo ("anda Dapat KTP Lansia");}
    else if($umur >=40 && $umur <=49){
        echo ("anda Dapat KTP Pralansia");}
        else if($umur>30){
            echo ("anda Dapat KTP Dewasa");}
            else if($umur>18){
                echo ("anda Dapat KTP Remaja");}
                else if($umur>5){
                    echo ("anda Dapat KTP Anak");}
else {
    echo ("tidak dapat");}}

    ?>
</body>
</html>
<br><hr>
<?php
//SWITCHCASE
$baju='M';//nilai yang diinput
$baju=strtolower($baju);//mengubah input huruf menjadi kecil

switch($baju){
    case 'l':
        echo  "Large";
        break;
    case 'm':
        echo "Medium";
        break;
    case 's':
        echo "Small";
        break;
    default:
        echo "ukuran baju tidak tersedia";
}

echo "<hr>";
$nilai=50; //nilai yang kita input
switch($nilai){
    case ($nilai<=70):
        echo "$nilai:nilai cukup";
        break;
    case ($nilai<=80):
        echo "$nilai:nilai memuaskan";
        break;
    case ($nilai<=100):
        echo "$nilai:nilai memuaskan";
        break;
        default:
        echo "nihil";
}


echo "<hr>";
//ternary operator yang hanya memiliki 3 expression
//jika nilai >5 maka baik, selain itu buruk
//fungsi if

$nilai=10;//input nilai
if($nilai>5){
    echo "baik";
}
else{
    echo "buruk";
}

echo "<hr>";
//fungsi ternary operator
$nilai=4;//input nilai
echo ($nilai>5) ? "baik" : "buruk";
?>




