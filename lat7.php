<?php
$a = $_GET['a'];
$b = $_GET['b'];
$hasil = $_GET['hasil'];
$tombol = $_GET['proses'];

if(isset($tombol)){
    if($tombol == 'tambah'){
        $hasil = $a + $b;
    }
    else if($tombol =='kurang'){
        $hasil = $a - $b;
    }
    else {$hasil = 0;}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>kalkulator</title>
</head>
<body>
    <form action="" method="get">
        Angka 1:<input type="text" name="a">
        Angka 2:<input type="text" name="b">
        hasil:<input type="text" value="<?=$hasil?>">
        <hr>
        <button type="submit" name="proses" value="tambah">+</Button>
         <button type="submit" name="proses" value="tambah">-</Button>
         <input type="reset" value="clear">
</form>

</body>
</html>