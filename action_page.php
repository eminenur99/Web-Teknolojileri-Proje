<?php 

$kullaniciadi = $_POST['uname'];
$parola = $_POST['psw'];

if($kullaniciadi=="eminenur" && $parola == 123456)
{
    echo "giris basarili";
}
else
{
    echo "kullanici adi veya parola hatali";
}
?>
