<?php
//array:sekumpulan data
//untuk mencetak array menggunakan "foreach"

//1. ARRAY NUMERIK
$ar_buah = ['pepaya', 'durian', 'salak', 'anggur', 'jeruk'];
//cetak indek ke?
echo $ar_buah[1];


echo"<hr>";
$jumlah = count($ar_buah);
echo $jumlah;


echo"<hr>";
foreach ($ar_buah as $cetak){echo "$cetak<br>";}


//2. ARRAY ASOSIATIF
$ar_hewan = [10 =>'sapi', 'kambing', 'ayam', 'bebek'];
//cetak indek ke?
echo $ar_hewan[11];

echo"<hr>";
foreach ($ar_hewan as $id => $isi){ echo "$id $isi <br>";}




//3. ARRAY MULTIDIMENSIA (ARAY DALAM ARRAY)

$a1=['Nama'=>'Budi', 'Alamat'=>'Depok', 'Telp'=>'12345', 'Status'=>'Jomblo'];
$a2=['Nama'=>'Dono', 'Alamat'=>'Bogor', 'Telp'=>'23456', 'Status'=>'Kawin'];
$a3=['Nama'=>'Tini', 'Alamat'=>'Jakarta', 'Telp'=>'54321', 'Status'=>'Lajang'];
$ar_siswa = [$a1,$a2,$a3];
//deklarasikan nama2 judul pada tabel header menggunakan looping array
$ar_judul=['No','Nama','Alamat', 'Telp', 'Status'];
?>
//array: Sekumpulan data
//array numerik dan array asosiatif
//untuk mencetak array memerlukan foreach

/

<h3>Daftar Tabel Siswa</h3>
<table border="1" width="50%" cellpadding="2" cellspacing="0" >
<thead>
<tr>
<?php
foreach($ar_judul as $judul){
?>
<th bgcolor="yellow"><?=$judul?></th>
<?php
}?>
</tr>
</thead>
<tbody>
<?php
$no=1; //looping nomor
foreach($ar_siswa as $siswa){
?>
<tr>
<td><?= $no?></td>
<td><?= $siswa['Nama'] ?></td>
<td><?= $siswa['Alamat'] ?></td>
<td><?= $siswa['Telp'] ?></td>
<td><?= $siswa['Status'] ?></td>
</tr>
<?php

$no++; //looping nomor
}
?>
</tbody>
<tfoot>
<tr>
<th bgcolor="yellow" colspan="5">
copyright @pusinfolahta
</th>
</tr>
</tfoot>
</table>



<hr>

Bulan:
<select name="bln">
    <option value="">Bulan</option>
    <?php
$bln = ["januari", 'Februari', 'maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'september', 'Oktober', 'November', 'Desember'];
foreach ($bln as $id => $isi){echo "<option value='$id'>$isi</option>";}

    ?>
