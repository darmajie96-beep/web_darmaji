<!DOCTYPE html>
<html lang="en">
<head>
<title>Daftar Siswa</title>
</head>
<body>
<table align="center" border="1" width="400" cellspacing="1"
cellpadding="10">
<thead>
<tr bgcolor="orange">
<th>No</th>
<th>Nama</th>
<th>Alamat</th>
</tr>
</thead>
<tbody>
<?php
for($no=1;$no<=50;$no=$no+1){ //looping dengan for dari 1 s/d 100
//tentukan warna genap/ganjil dengan konsep ternary pada looping
//jika nomor modulus(%) 2 tidak ada sisa 0
//cara ternary
$warna = ($no % 2 == 0) ? 'blue' : 'pink';
echo "<tr bgcolor='$warna'>
<td>$no</td>
<td> Peserta $no</td>
<td> JL. Cilangkap Raya No.$no</td>
</tr>";

}
?>
</tbody>
</table>
</body>
</html>