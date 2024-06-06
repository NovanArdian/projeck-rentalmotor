<?php
// Definisi kelas Data
class Data {
    // Deklarasi properti
    public $member;
    public $jenis;
    public $waktu;
    public $diskon;
    protected $pajak; // Properti yang dilindungi, hanya bisa diakses oleh kelas ini dan turunannya
    private $Scoopy, $Beat, $Vario, $Aerox; // Properti privat, hanya bisa diakses oleh kelas ini
    private $listmember = ['Bara', 'irghi', 'Panca', 'Nugraha']; // Daftar member yang valid

    // Konstruktor kelas Data
    function __construct(){
        $this->pajak = 10000; // Inisialisasi nilai pajak
    }

    // Fungsi untuk memeriksa status member
    public function getMember(){
        if(in_array($this->member, $this->listmember)){
            return "member"; // Mengembalikan "member" jika nama ada dalam daftar member
        }else{
            return "non-member"; // Mengembalikan "non-member" jika nama tidak ada dalam daftar member
        }
    }

    // Fungsi untuk mengatur harga masing-masing jenis motor
    public function setHarga($jenis1, $jenis2, $jenis3, $jenis4){
        $this->Scoopy = $jenis1;
        $this->Beat = $jenis2;
        $this->Vario = $jenis3;
        $this->Aerox = $jenis4;
    }

    // Fungsi untuk mendapatkan harga masing-masing jenis motor
    public function getHarga() {
        $data["Scoopy"] = $this->Scoopy;
        $data["Beat"] = $this->Beat;
        $data["Vario"] = $this->Vario;
        $data["Aerox"] = $this->Aerox;
        return $data;
    }
}

// Definisi kelas Rental yang mewarisi dari kelas Data
class Rental extends Data {
    // Fungsi untuk menghitung harga rental
    public function hargaRental () {
        // Mendapatkan harga motor berdasarkan jenis yang dipilih
        $dataHarga = $this->getHarga()[$this->jenis];

        // Menentukan diskon berdasarkan status member
        $diskon = $this->getMember() == "member" ? 5 : 0;

        // Menghitung total biaya rental
        if ($this->waktu === 1) {
            $bayar = ($dataHarga - ($dataHarga * $diskon / 100)) + $this->pajak;
        } else {
            $bayar = (($dataHarga * $this->waktu) - ($dataHarga * $diskon / 100)) + $this->pajak;
        }

        // Mengembalikan total pembayaran dan diskon
        return [$bayar, $diskon];
    }

    // Fungsi untuk menampilkan detail pembayaran
    public function pembayaran() {
        echo "<p><strong>Nama Member:</strong> " . $this->member . "</p>";
        echo "<p><strong>Status:</strong> " . $this->getMember() . "</p>";
        echo "<p><strong>Diskon:</strong> " . $this->hargaRental()[1] . "%</p>";
        echo "<p><strong>Jenis Motor:</strong> " . $this->jenis . "</p>";
        echo "<p><strong>Lama Rental:</strong> " . $this->waktu . " Hari</p>";
        echo "<p><strong>Harga Rental per Hari:</strong> Rp. " . number_format($this->getHarga()[$this->jenis], 0, '', '.') . "</p>";
        echo "<p><strong>Total Pembayaran:</strong> Rp. " . number_format($this->hargaRental()[0], 0, '', '.') . "</p>";
    }
}

?>
