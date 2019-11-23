<?php
//Masukan Username
$username = 'IMAM'; //username berupa imam

if(preg_match("/^[A-Z]/", $username)) {

  echo 'benar, Huruf Kapital';

} else {

  echo 'Tidak bisa huruf kecil';

}

?>
<?php
//Masukan Password
$password = '085-123IMAM'; //ini merupakan passwordnya

if(preg_match("/^[0-9]{3}-[0-9]{3}[A-Z]{4}/", $password)) {

  echo 'benar,  kombinasi dari 3 digit angka, simbol “-”, 3 digit angka lalu 4 huruf besar';

} else {

  echo 'Tidak bisa huruf kecil';

}

?>

