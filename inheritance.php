<?php

class manusia {
    // Field = Properties
    protected $nama;
    public int $umur;
    public int $Masukkuliah;
    public $hobi;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    // Method = function
    public function perilaku1($nama,$hobi){
        return "{$nama} suka melakukan {$hobi}";
    }

    public function perilaku2($arg1, $arg2){
        $tahunKuliah = $arg1 - $arg2;
        echo $tahunKuliah . "tahun";
    }
}

class Mahasiswa extends manusia {
    public function getNamaMahasiswa() {
        // Mengakses properti protected dari class induk
        return $this->nama;
    }
}

$tahunSaatini = 2024;

// Mencetak class manusia
$data = new manusia();

$data->umur = 21;
$data->hobi = "ngoding";
$data->Masukkuliah = 2021;


$mahasiswa = new Mahasiswa();
$mahasiswa->setNama('Ando');
echo $data->setNama('Ando');
echo $data->getNama();

echo $mahasiswa->getNamaMahasiswa(); // Output: Ando