<?php
//huu belum tau jawaban nya
$username = '“Negara Kesatuan Republik  Indonesia';

if(preg_match("/[A-Z]/", $username)) {

  echo 'benar, Huruf Kapital';

} else {

  echo 'Tidak bisa huruf kecil';

}

?>
