<?php
// Interface -> semua class yang menggunakan interface harus mengimplementasikan semua method dari interfacenya
interface Bentuk {
    public function luas();
}

// Class Persegi implementasi dari interface Bentuk
class Persegi implements Bentuk {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function luas() {
        return $this->sisi * $this->sisi;
    }
}

// Class Lingkaran implementasi dari interface Bentuk
class Lingkaran implements Bentuk {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function luas() {
        return pi() * $this->radius * $this->radius;
    }
}

$persegi = new Persegi(4);
$lingkaran = new Lingkaran(5);

echo "Luas persegi: " . $persegi->luas() . "<br>";
echo "Luas lingkaran: " . $lingkaran->luas();
