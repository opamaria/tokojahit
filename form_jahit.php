<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pesanan Jahit</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fbc2eb, #a6c1ee);
            margin: 0;
            padding: 0;
        }

        .box {
            width: 520px;
            background: white;
            margin: 40px auto;
            padding: 28px 30px;
            border-radius: 18px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            color: #e83e8c;
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 6px;
            color: #333;
        }

        input,
        select {
            width: 100%;
            height: 42px;
            padding: 8px 12px;
            margin-bottom: 18px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 14px;
            box-sizing: border-box;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #4dabf7;
        }

        button {
            width: 100%;
            height: 48px;
            background: linear-gradient(135deg, #ff6fae, #4dabf7);
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            opacity: 0.9;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 18px;
            font-weight: bold;
            text-decoration: none;
            color: #1c7ed6;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>🧵 Form Pesanan Jahit</h2>

    <form method="post" action="hasil.php">

        <label>Nama Pemesan</label>
        <input type="text" name="nama" required>

        <label>Jenis Pakaian</label>
        <select name="baju" required>
            <option value="">-- Pilih Jenis Pakaian --</option>
            <option>Baju</option>
            <option>Kemeja</option>
            <option>Celana</option>
            <option>Rok</option>
            <option>Dress</option>
            <option>Jaket</option>
            <option>Seragam Sekolah</option>
            <option>Seragam Kantor</option>
            <option>Kebaya</option>
            <option>Gamis</option>
        </select>

        <label>Jenis Bahan</label>
        <select name="bahan" required>
            <option value="">-- Pilih Jenis Bahan --</option>
            <option>Katun</option>
            <option>Rayon</option>
            <option>Polyester</option>
            <option>Linen</option>
            <option>Satin</option>
            <option>Denim</option>
            <option>Drill</option>
            <option>Wolfis</option>
            <option>Balotelli</option>
            <option>Jersey</option>
        </select>

        <label>Jumlah Pesanan</label>
        <input type="number" name="jumlah" min="1" required>

        <label>Harga per Baju (Rp)</label>
        <input type="number" name="harga" min="0" required>

        <button type="submit">💾 Simpan Pesanan</button>
    </form>

    <a href="index.php">⬅ Kembali ke Menu Utama</a>
</div>

</body>
</html>
