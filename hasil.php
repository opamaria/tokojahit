<?php
session_start();
date_default_timezone_set("Asia/Jakarta");

/* =========================
   BUAT SESSION JIKA BELUM ADA
========================= */
if (!isset($_SESSION['pesanan'])) {
    $_SESSION['pesanan'] = [];
}

/* =========================
   SIMPAN DATA DARI FORM
========================= */
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama   = $_POST['nama'];
    $baju   = $_POST['baju'];
    $bahan  = $_POST['bahan'];
    $jumlah = (int)$_POST['jumlah'];
    $harga  = (int)$_POST['harga'];

    $subtotal = $jumlah * $harga;

    // hitung diskon
    if ($jumlah >= 3 && $jumlah <= 5) {
        $diskon = 0.15;
    } elseif ($jumlah >= 6 && $jumlah <= 10) {
        $diskon = 0.25;
    } elseif ($jumlah >= 11 && $jumlah <= 15) {
        $diskon = 0.50;
    } elseif ($jumlah >= 16 && $jumlah <= 20) {
        $diskon = 0.75;
    } elseif ($jumlah > 20) {
        $diskon = 0.85;
    } else {
        $diskon = 0;
    }

    $potongan = $subtotal * $diskon;
    $total = $subtotal - $potongan;

    $_SESSION['pesanan'][] = [
        'tanggal'   => date("d-m-Y"),
        'nama'      => $nama,
        'baju'      => $baju,
        'bahan'     => $bahan,
        'jumlah'    => $jumlah,
        'harga'     => $harga,
        'subtotal'  => $subtotal,
        'diskon'    => $diskon * 100,
        'total'     => $total
    ];
}

/* =========================
   DELETE PESANAN
========================= */
if (isset($_GET['hapus'])) {
    $index = $_GET['hapus'];
    unset($_SESSION['pesanan'][$index]);
    $_SESSION['pesanan'] = array_values($_SESSION['pesanan']);
    header("Location: hasil.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
        }
        .container {
            width: 95%;
            background: white;
            margin: 40px auto;
            padding: 25px;
            border-radius: 15px;
        }
        h2 {
            text-align: center;
            color: #d63384;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th {
            background: linear-gradient(135deg, #ff6fae, #4dabf7);
            color: white;
            padding: 12px;
        }
        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        .total {
            color: #1c7ed6;
            font-weight: bold;
        }
        .hapus {
            background: #ff4d4f;
            color: white;
            padding: 6px 12px;
            border-radius: 15px;
            text-decoration: none;
            font-size: 13px;
        }
        .hapus:hover {
            opacity: 0.8;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            margin-right: 10px;
            padding: 12px 22px;
            background: linear-gradient(135deg, #ff6fae, #4dabf7);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
<h2>📋 Riwayat Pesanan Jahit</h2>

<table>
<tr>
    <th>No</th>
    <th>Tanggal</th>
    <th>Nama</th>
    <th>Jenis Pakaian</th>
    <th>Bahan</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Subtotal</th>
    <th>Diskon</th>
    <th>Total Bayar</th>
    <th>Delete</th>
</tr>

<?php if (count($_SESSION['pesanan']) == 0) { ?>
<tr>
    <td colspan="11">Belum ada pesanan</td>
</tr>
<?php } else { 
$no = 1;
foreach ($_SESSION['pesanan'] as $i => $p) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $p['tanggal'] ?></td>
    <td><?= $p['nama'] ?></td>
    <td><?= $p['baju'] ?></td>
    <td><?= $p['bahan'] ?></td>
    <td><?= $p['jumlah'] ?></td>
    <td>Rp <?= number_format($p['harga'],0,',','.') ?></td>
    <td>Rp <?= number_format($p['subtotal'],0,',','.') ?></td>
    <td><?= $p['diskon'] ?>%</td>
    <td class="total">Rp <?= number_format($p['total'],0,',','.') ?></td>
    <td>
        <a class="hapus" href="?hapus=<?= $i ?>" onclick="return confirm('Hapus pesanan ini?')">
            🗑 Hapus
        </a>
    </td>
</tr>
<?php }} ?>
</table>

<a href="form_jahit.php" class="btn">➕ Input Pesanan</a>
<a href="index.php" class="btn">🏠 Menu Utama</a>

</div>

</body>
</html>
