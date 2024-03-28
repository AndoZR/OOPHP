<?php
// Abstract class -> semua class turunan harus mengimplementasikan method abstractnya
abstract class Hewan {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Abstract method
    abstract public function bersuara();
}

// Class anak yang mewarisi Hewan
class Kucing extends Hewan {
    public function bersuara() {
        return "Meong";
    }
}

// Class anak yang mewarisi Hewan
class Anjing extends Hewan {
    public function bersuara() {
        return "Guk Guk";
    }
}

// Membuat objek dari class Kucing
$kucing = new Kucing('Kucing');
echo $kucing->bersuara(); // Output: Meong

// Membuat objek dari class Anjing
$anjing = new Anjing('Anjing');
echo $anjing->bersuara(); // Output: Guk Guk


