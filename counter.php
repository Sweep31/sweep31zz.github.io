<?php
// Kullanıcı sayısını tutan dosya
$counterFile = 'counter.txt';

// Dosya yoksa, dosyayı oluştur ve başlangıç değerini 0 olarak ayarla
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Mevcut sayıyı oku
$count = (int)file_get_contents($counterFile);

// Kullanıcı sayısını bir artır
$count++;

// Yeni sayıyı dosyaya yaz
file_put_contents($counterFile, $count);

// Sayıyı döndür
echo $count;
?>
