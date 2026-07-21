<?php 

//komentar 1
#komentar 2

/*
ini adalah komentar 1
komentar 2
komentar 3
komentar 4
*/

echo "Belajar PHP"; 
echo "<br>";
echo "Belajar Web <br>";
print 'Belajar MySQL';
echo "<hr>";

//variable user
$nama = "budi rahardjo";
$kata = "Selamat Pagi";
$kata2 = "Belajar PHP";
echo "halo $nama";
echo "<br>";
echo 'halo '.$nama. ' apa khabar';
//halo selamat pagi pak budi rahardjo, silahkan belajar PHP hari ini
echo "<br>";
echo "halo $kata pak $nama, silahkan belajar PHP hari ini";
echo "<br>";
echo 'halo '.$kata.' pak'.$nama.', silahkan'.$kata2.'hari ini';

//pak ferano bekerja sebagai tentara, beliau tinggal didepok, umurnya 38 tahun dengan berat 74.5 kg

$nama2="Ferano";//tipe data string
$pekerjaan="Tentara";//tipe data string
$alamat="Depok";//tipe data string
$umur=38;//tipe data integar
$berat=74.5;//tipe data float
echo "<br>";
echo 'pak '.$nama2. ' bekerja sebagai'.$pekerjaan. ', beliau tinggal di '.$alamat. ' umurnya ' .$umur. ' tahun dengan berat ' .$berat.'kg' ;
echo "<br>";

//variable sistem
echo $_SERVER['SERVER_ADMIN'];
echo $_SERVER['SERVER_PORT'];
echo $_SERVER['DOCUMENT_ROOT'];
//$_GET dan $_POST

//Variable konstanta
//define:untuk memanggil variable konstanta
define('PHI',3.14);//phi diameter 3.14
define('PELAJARAN','lavarel');
define('DBSERVER','localhost');

//cetak
//soal cetak pelajaran, dbserver dan phi
echo 'matpel:'.PELAJARAN. '<br>';

//tipe data
$itungstring="belajar";
var_dump($itungstring);
echo "<hr>";

$angka=12177;
$angka2=12.177;
var_dump($angka);
var_dump($angka2);
echo "<br>";

echo "<hr>";
$str="Pak FERanO SeDAng BELajaR Php";//teks asli
echo "str";
echo "<br>";

//konversi huruf $str menjadi kapital
$besar=strtoupper($str);
echo "<br>";
$kecil=strtolower($str);

echo $besar;
echo "<br>";
echo $kecil;
echo "<br>";
echo ucwords($str);
echo "<br>";
echo lcfirst($str);

echo "<br>";
echo "<hr>";
echo "<h3>operator aritmatika</h3>";
$a=10;
$b=4;
echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a/$b.'<br>';
echo $a*$b.'<br>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Documen</title>
</head>
<body>
<br><hr>
<h2>sisipkan php ke html</h2>
<?php echo "ini adalah isi dari php"; ?>
<?="ini adalah isi dari php"?>
    
</body>
</html>


