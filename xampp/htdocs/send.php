<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send WhatsApp Message</title>
</head>

<body>
    <button onclick="sendWhatsAppMessage()">Send WhatsApp Message</button>

    <script>
        function sendWhatsAppMessage() {
            var phoneNumber = '6281234567890'; // Nomor telepon penerima (dengan kode negara tanpa + atau 0 di depan)
            var message = 'Hello, this is a test message.'; // Pesan yang akan dikirim

            var url = `https://api.whatsapp.com/send?phone=${phoneNumber}&text=${encodeURIComponent(message)}`;

            // Buka WhatsApp dengan nomor dan pesan yang telah ditentukan
            window.open(url, '_blank');
        }
    </script>
</body>

</html>