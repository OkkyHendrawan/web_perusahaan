<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Kirim email ke alamat tujuan
    $to = "okkyhendrawan89@gmail.com";
    $email_subject = "Pesan dari: $name";
    $email_body = "Nama: $name\n" .
                  "Email: $email\n" .
                  "Subjek: $subject\n\n" .
                  "Pesan:\n$message";

    $headers = "From: $email";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Pesan Anda telah berhasil dikirim. Terima kasih!";
    } else {
        echo "Maaf, ada masalah dalam mengirim pesan Anda. Silakan coba lagi.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>
