<?php
$styles = [
    "height"=> "30%",
    "style"=> "background-color: rgb(63, 4, 4); border-radius: 50%; padding:10px;"
];

$barang = [
    ["nama" => "Laptop", "harga_awal" => 10000000, "hari" => 10, "permintaan" => 60],
    ["nama" => "Smartphone", "harga_awal" => 5000000, "hari" => 5, "permintaan" => 40],
    ["nama" => "Tablet", "harga_awal" => 3000000, "hari" => 7, "permintaan" => 110],
    ["nama" => "Headphone", "harga_awal" => 1500000, "hari" => 3, "permintaan" => 30],
    ["nama" => "Monitor", "harga_awal" => 2500000, "hari" => 8, "permintaan" => 75]
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Harga Barang</title>
    <style>
        h2, h3 {
            color: rgb(242, 219, 219);
        }
        body {
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
            background: linear-gradient(100deg, rgb(89, 61, 61), rgb(80, 70, 70));
        }
        table {
            width: 70%;
            border-collapse: collapse;
            margin: 20px auto;
            text-align: center;
            color: rgb(66, 2, 2);
        }
        th, td {
            border: 3px solid rgb(48, 17, 17);
            padding: 8px;
            text-align: center;
            vertical-align: middle;
            background-color: rgb(219, 195, 195);
        }
        th {
            background-color:rgb(245, 185, 185);
        }
    </style>
</head>
<body>

<?php
    echo '<img src="image3.png" height="'.$styles["height"].'">';
    // Tampilkan gambar dengan src 'image3.png', height-nya akses dari array, style-nya juga akses dari array
?>

<h2>Laporan Harga Barang</h2>

<table>
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga Awal</th>
        <th>Hari Disimpan</th>
        <th>Permintaan</th>
        <th>Harga Setelah Penyimpanan</th>
        <th>Harga Setelah Permintaan</th>
    </tr>

    <?php
    $total_nilai_stok = 0;
    for ($i = 0; $i < count($barang); $i++) {
        $harga_awal = $barang[$i]["harga_awal"];
        $hari = $barang[$i]["hari"];
        $permintaan = $barang[$i]["permintaan"];

        // Hitung harga setelah penyimpanan (pengurangan 2% per hari)
        $harga_setelah_penyimpanan = $harga_awal;
        for ($j = 0; $j < $hari; $j++) {
            $harga_setelah_penyimpanan -= $harga_setelah_penyimpanan * 0.02;
        }

        // Hitung harga setelah permintaan
        if ($permintaan > 100) {
            $harga_setelah_permintaan = $harga_setelah_penyimpanan * 1.10; // Tambah 10%
        } elseif ($permintaan > 50) {
            $harga_setelah_permintaan = $harga_setelah_penyimpanan * 1.05; // Tambah 5%
        } else {
            $harga_setelah_permintaan = $harga_setelah_penyimpanan;
        }

        // Tambahkan ke total nilai stok
        $total_nilai_stok += $harga_setelah_permintaan;

        // Tampilkan data dalam tabel
        echo "<tr>
                <td>".($i + 1)."</td>
                <td>".$barang[$i]["nama"]."</td>
                <td>Rp".number_format($harga_awal, 0, ',', '.')."</td>
                <td>".$hari."</td>
                <td>".$permintaan."</td>
                <td>Rp".number_format($harga_setelah_penyimpanan, 0, ',', '.')."</td>
                <td>Rp".number_format($harga_setelah_permintaan, 0, ',', '.')."</td>
              </tr>";
    }
        // Kode anda di sini
    ?>
</table>

<h3>Total Nilai Stok: Rp<?php echo number_format($total_nilai_stok, 0, ',', '.');/*Kode anda di sini*/ ?></h3>

</body>
</html>
