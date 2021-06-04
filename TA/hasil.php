<head>
    <title>Tugas Akhir Praktikum DKP 2021</title>
</head>

<body>
    <link rel="stylesheet" href="pemanis.css">
    <div class="utama">
        <div class="judul2">
            <h1>Apotek Online</h1>
            <hr>
        </div>
        <div class="kotak">
            <div class="struk">
                <h2>Terima Kasih</h2>
                <table border="1" style="color: rgb(95, 121, 190);" ;>
                    <tr>
                        <th colspan="2">Struk Pembelian</th>
                    </tr>
                    <tr>
                        <td>Saldo Awal</td>
                        <td><?php echo $saldo = $_GET['saldo'];?></td>
                    <tr>
                        <td>Obat dan Jumlahnya</td>
                        <td>
                            <?php
                            $harga = 0;
                            if ($_GET) {
                                if (empty($_GET['obat'])) {
                                    echo "Tidak memilih obat";
                                } else {
                                    $obat = $_GET['obat'];
                                    $jumlah = $_GET['jumlah'];
                                    for ($i = 0; $i < sizeof($obat); $i++) {
                                        if ($jumlah[$i] == NULL) {
                                            echo "Tidak memasukkan jumlah obat";
                                            break;
                                        } elseif ($jumlah[$i] <= 0) {
                                            echo "Masukkan jumlah obat";
                                            break;
                                        } else {
                                            echo $jumlah[$i] . " " . $obat[$i] . " | ";
                                            if ($obat[$i] == 'Antiradang') {
                                                $harga += 33000 * $jumlah[$i];
                                            } elseif ($obat[$i] == 'Saluran Cerna') {
                                                $harga += 16000 * $jumlah[$i];
                                            } elseif ($obat[$i] == 'Mulut dan Tenggorokkan') {
                                                $harga += 40000 * $jumlah[$i];
                                            } elseif ($obat[$i] == 'Saluran Nafas') {
                                                $harga += 18500 * $jumlah[$i];
                                            } elseif ($obat[$i] == 'Depresan') {
                                                $harga += 38000 * $jumlah[$i];
                                            } elseif ($obat[$i] == 'Kulit') {
                                                $harga += 65000 * $jumlah[$i];
                                            } else {
                                                $harga += 15000 * $jumlah[$i];
                                            }
                                        }
                                    }
                                }
                            }
                            ?>
                        </td>
                    <tr>
                        <td>Pakai BPJS</td>
                        <td>
                            <?php echo $status = $_GET['status']; ?>
                        </td>
                    <tr>
                        <td>Total</td>
                        <td>
                            <?php
                            if ($status == "Ya") {
                                echo "0";
                            } else {
                                echo $harga;
                            }
                            ?>
                        </td>
                    <tr>
                        <td>Saldo Akhir</td>
                        <td>
                            <?php
                            if (isset($_GET['Pesan'])) {
                                $status = $_GET['status'];

                                //pengkondisian apabila kosong
                                if (empty($saldo)) {
                                    echo "Mohon diisi dengan benar";
                                } 
                                else {
                                    //pengecekan kartu member
                                    $hasil = 0;
                                    if ($status == "Ya") {
                                        $diskon = 0;
                                        echo $saldo . " (Gratis)";
                                    } else {
                                        $diskon = 1;
                                        $hasil = $saldo - $harga;
                                        if ($saldo <= 0) {
                                            echo "Lain kali bawa uang yang cukup ya kak";
                                        } elseif ($hasil < 0) {
                                            echo "Maaf kak uangnya kurang";
                                        } else {
                                            echo $hasil;
                                        }
                                    }
                                }
                            }
                            ?>
                        </td>
                </table><br>
                <a href="menu.html"><button type="submit">Pesan Ulang</button></a>
            </div>
            <img class="tiga" src="css/selesai.svg">
        </div>
    </div>
</body>