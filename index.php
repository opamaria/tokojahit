<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Beranda | Toko Jahit Nusa Kreatif</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            margin: 0;
            padding: 0;
        }

        .container {
            width: 800px;
            background: #ffffff;
            margin: 40px auto;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        h1 {
            text-align: center;
            color: #d63384;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #555;
            margin-bottom: 30px;
        }

        .section {
            background: #f1f7ff;
            border-left: 6px solid #ff6fae;
            padding: 18px;
            border-radius: 12px;
            margin-bottom: 20px;
        }

        .section h2 {
            color: #1c7ed6;
            margin-top: 0;
        }

        ul {
            margin-left: 20px;
            line-height: 1.7;
        }

        .menu {
            text-align: center;
            margin-top: 35px;
        }

        .menu a {
            display: inline-block;
            margin: 12px;
            padding: 14px 26px;
            background: linear-gradient(135deg, #ff6fae, #4dabf7);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            transition: 0.3s;
        }

        .menu a:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>👗 Toko Jahit Nusa Kreatif</h1>
    <p class="subtitle">
        Jasa jahit profesional dengan hasil rapi, modern, dan sesuai ukuran pelanggan.
        Kami melayani pembuatan serta perbaikan berbagai jenis pakaian dengan
        memperhatikan detail, kenyamanan, dan kualitas jahitan agar pelanggan
        mendapatkan hasil terbaik sesuai kebutuhan dan keinginan.
    </p>

    <div class="section">
        <h2>🕒 Jam Operasional</h2>
        <ul>
            <li><b>Senin – Sabtu</b> : 08.00 – 17.00</li>
            <li><b>Minggu</b> : Tutup</li>
        </ul>
    </div>

    <div class="section">
        <h2>⏳ Estimasi Pengerjaan</h2>
        <ul>
            <li>Tergantung model & tingkat kesulitan</li>
            <li>Perkiraan waktu: <b>3 – 10 hari</b></li>
        </ul>
    </div>

    <div class="menu">
        <a href="form_jahit.php">➕ Input Pesanan</a>
        <a href="hasil.php">📄 Riwayat Pesanan</a>
    </div>

    <div class="footer">
        © <?php echo date("Y"); ?> Toko Jahit Nusa Kreatif | Pelayanan Terbaik untuk Anda
    </div>

</div>

</body>
</html>
