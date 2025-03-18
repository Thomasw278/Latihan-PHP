<?php
#Tidak Diperkenankan Merubah Array
$array = [
    "David" => [
        [
            "konser" => "Coldplay Music of the Spheres Tour",
            "artis" => "Aldi Taher",
            "waktu" => "18.00",
            "durasi" => "4",
            "gambar" => "https://studio.mrngroup.co/storage/app/media/Prambors/Editorial%203/konser%20coldplay-20230511114531.webp?tr=w-800"
        ],
        [
            "konser" => "Synchronize Fest",
            "artis" => "Iwan Fals",
            "waktu" => "17.00",
            "durasi" => "2",
            "gambar" => "https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/131/2023/11/17/IMG_20231117_094553-2996202198.jpg"
        ],
        [
            "konser" => "Bergembira Bersama",
            "artis" => "Nadin Amizah",
            "waktu" => "19.00",
            "durasi" => "3",
            "gambar" => "https://thumb.viva.co.id/media/frontend/thumbs3/2023/09/25/65112dc4ebd9d-nadin-amizah_665_374.jpg"
        ]
    ]
];

$total_durasi = $array["David"][0]["durasi"] + $array["David"][1]["durasi"] + $array["David"][2]["durasi"];
$max_durasi = max($array["David"][0]["durasi"], $array["David"][1]["durasi"], $array["David"][2]["durasi"]);
$gambar_terlama = $array["David"][0]["gambar"];
echo "<h1><u>David</u> ingin menonton konser pada tabel berikut: </h1>"
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Test PHP #1</title>
    <style>
    img {
        width: 100px;
        height: 100px;
    }
</style>

</head>
<body>
    <table border="2">
        <thead>
            <tr>
                <th>Konser</th>
                <th>Artis</th>
                <th>Waktu</th>
                <th>Durasi</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $array["David"][0]["konser"] ?></td>
                <td><?= $array["David"][0]["artis"] ?></td>
                <td><?= $array["David"][0]["waktu"] ?></td>
                <td><?= $array["David"][0]["durasi"] ?></td>
                <td><img src="<?= $array["David"][0]["gambar"] ?>"alt="Gambar Konser"></td>
            </tr>
            <tr>
                <td><?= $array["David"][1]["konser"] ?></td>
                <td><?= $array["David"][1]["artis"] ?></td>
                <td><?= $array["David"][1]["waktu"] ?></td>
                <td><?= $array["David"][1]["durasi"] ?></td>
                <td><img src="<?= $array["David"][1]["gambar"] ?>"alt="Gambar Konser"></td>
            </tr>
            <tr>
                <td><?= $array["David"][2]["konser"] ?></td>
                <td><?= $array["David"][2]["artis"] ?></td>
                <td><?= $array["David"][2]["waktu"] ?></td>
                <td><?= $array["David"][2]["durasi"] ?></td>
                <td><img src="<?= $array["David"][2]["gambar"] ?>"alt="Gambar Konser"></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"><strong>Total Durasi</strong></td>
                <td colspan="1"><?= $total_durasi ?> Jam</td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3">Konser paling lama</td>
                <td colspan="1"><?= $max_durasi ?> Jam</td>
                <td><img src="<?= $gambar_terlama ?>" height="100"  width="100px" alt="Gambar Konser Terlama"></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
