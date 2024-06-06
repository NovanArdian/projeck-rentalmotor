<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(https://wallpapers.com/images/hd/celtic-fc-2000-x-1250-m3nsc33x29eed8px.jpg);
            background-size: cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            flex-grow: 1;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 800px;
            width: 80%;
            margin: 20px;
            padding: 20px;
            background-color: rgba(0, 128, 0, 0.3);
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }

        .form-container,
        .result-container {
            flex: 1;
            margin: 10px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: white;
            font-size: 14px;
        }

        select,
        input {
            width: 100%;
            padding: 8px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: #fff;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: #e9ecef;
            border-radius: 8px;
            color: #333;
        }

        .result h2 {
            text-align: center;
            margin-bottom: 20px;
            color: green;
            font-size: 20px;
        }

        .result table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 9px;
        }

        .result th,
        .result td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
            font-size: 14px;
        }

        .result th {
            background-color: green;
            color: #fff;
        }

        .result td {
            background-color: #f8f9fa;
        }

        .print-button {
            margin-top: 20px;
            padding: 10px;
            background-color: #28a745;
            color: white;
            font-size: 14px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .print-button:hover {
            background-color: #218838;
        }

        .sponsor-container {
            max-width: 800px;
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .sponsor-container h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        .sponsors {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .sponsor {
            margin: 10px;
            padding: 5px;
            background-color: #e9ecef;
            border-radius: 7px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: calc(25% - 40px);
            box-sizing: border-box;
            text-align: center;
        }

        .sponsor img {
            max-width: 100%;
            max-height: 50px;
            border-radius: 4px;
        }

        /* Desktop styles */
        /* Tidak perlu perubahan */

        /* Tablet styles (ukuran layar hingga 768px) */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .form-container,
            .result-container {
                width: 100%;
                max-width: 100%;
                margin: 10px 0;
            }

            .sponsor {
                width: calc(50% - 20px);
                margin: 10px 0;
            }
        }

        /* Mobile styles (ukuran layar hingga 480px) */
        @media (max-width: 480px) {
            .sponsor {
                width: calc(100% - 20px);
            }
        }

        /* Print styles */
        /* Print styles */
        /* Print styles */
        @media print {
            h1 {
                display: none;
            }

            /* Sembunyikan teks tanggal saat mencetak */
            .print-date {
                display: none;
            }

            body * {
                visibility: hidden;
            }

            .result,
            .result * {
                visibility: visible;
            }

            .result {
                position: static;
                width: auto;
                margin: 20px auto;
                /* Menaikkan elemen sedikit ke atas */
                padding: 20px;
                background-color: #fff;
                color: #333;
                border-radius: 8px;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }

            .result h2 {
                text-align: center;
                margin-bottom: 20px;
                color: green;
                font-size: 24px;
            }

            .result table {
                width: 100%;
                margin-top: 20px;
                border-collapse: collapse;
            }

            .result th,
            .result td {
                padding: 12px;
                border: 1px solid #ddd;
                text-align: left;
                font-size: 14px;
            }

            .result th {
                background-color: #28a745;
                color: #fff;
            }

            .result td {
                background-color: #f8f9fa;
            }

            .print-button {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="form-container">
                <h1>
                    <img src="images/10.png" alt="Logo" style="max-width: 90px;">
                    <img src="images/9.png" alt="Logo" style="max-width: 90px;">
                    <img src="images/13.png" alt="Logo" style="max-width: 92px;">
                </h1>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="member">Member:</label>
                        <select name="member" id="member">
                            <option value="Bara">Bara</option>
                            <option value="irghi">irghi</option>
                            <option value="Panca">Panca</option>
                            <option value="Nugraha">Nugraha</option>
                            <option value="Non-Member">Non-Member</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Motor:</label>
                        <select name="jenis" id="jenis">
                            <option value="Scoopy">Scoopy</option>
                            <option value="Beat">Beat</option>
                            <option value="Vario">Vario</option>
                            <option value="Aerox">Aerox</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="waktu">Lama Rental (Hari):</label>
                        <input type="number" id="waktu" name="waktu" min="1" required>
                    </div>
                    <button type="submit" name="submit">Submit</button>
                </form>
            </div>

            <div class="result-container">
                <?php
                require 'logic.php';

                // Cek apakah tombol submit telah ditekan
                if (isset($_POST['submit'])) {
                    // Ambil data dari form
                    $member = $_POST['member'];
                    $jenis = $_POST['jenis'];
                    $waktu = $_POST['waktu'];

                    // Buat objek Rental
                    $rental = new Rental();

                    // Set data pada objek Rental
                    $rental->member = $member;
                    $rental->jenis = $jenis;
                    $rental->waktu = $waktu;
                    $rental->setHarga(50000, 100000, 150000, 200000);

                    // Simpan hasil pembayaran
                    ob_start();
                    $rental->pembayaran();
                    $output = ob_get_clean();

                    echo '<div class="result">';
                    echo '<h2>Detail Transaksi</h2>';
                    echo '<table>';
                    echo '<tr><th>Member</th><td>' . htmlspecialchars($rental->member) . '</td></tr>';
                    echo '<tr><th>Status</th><td>' . htmlspecialchars($rental->getMember()) . '</td></tr>';
                    echo '<tr><th>Diskon</th><td>' . htmlspecialchars($rental->hargaRental()[1]) . '%</td></tr>';
                    echo '<tr><th>Jenis Motor</th><td>' . htmlspecialchars($rental->jenis) . '</td></tr>';
                    echo '<tr><th>Lama Rental</th><td>' . htmlspecialchars($rental->waktu) . ' Hari</td></tr>';
                    echo '<tr><th>Harga Per Hari</th><td>Rp. ' . number_format($rental->getHarga()[$rental->jenis], 0, '', '.') . '</td></tr>';
                    echo '<tr><th>Total Pembayaran</th><td>Rp. ' . number_format($rental->hargaRental()[0], 0, '', '.') . '</td></tr>';
                    echo '</table>';
                    echo '<button class="print-button" onclick="window.print()">Print Bukti Transaksi</button>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>

        <div class="sponsor-container">
            <h2>Our Sponsors</h2>
            <div class="sponsors">
                <div class="sponsor">
                    <img src="images/10.png" alt="Sponsor 1">
                    <p>Stone Island</p>
                </div>
                <div class="sponsor">
                    <img src="images/9.png" alt="Sponsor 2">
                    <p>Adidas</p>
                </div>
                <div class="sponsor">
                    <img src="images/12.png" alt="Sponsor 3">
                    <p>Celtic basketball</p>
                </div>
                <div class="sponsor">
                    <img src="images/7.png" alt="Sponsor 4">
                    <p>Lanks2Nd</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>