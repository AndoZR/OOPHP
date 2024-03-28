<?php

//  class -> gambarannya blueprint untuk mencetak objek-objek baru
class manusia
{
    protected $name;
    public $nama;
    public $age;
    public $hobi;

    public function makan()
    {
        echo "saya sukaa makan";
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

$cetak1 = new manusia();
$cetak1->nama = "Orang";
$cetak1->age = 21;
$cetak1->hobi = "Nyanyi";

echo "Nama: {$cetak1->nama}, umur: {$cetak1->age}";
$cetak1->makan();

?>