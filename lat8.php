<?php
//pengulangan angka 1 s/d 50
for($x=0;$x<=50;$x++){
    echo '<br>'.$x;
}
echo '<hr>';
?>

"tanggal lahir"
<select name="tgl">
    <option value="">tanggal</option>
    <?php 
    for($tgl=1;$tgl<31;$tgl++){echo"<option value=$tgl>$tgl</option>";}
    ?>