<?php
// contructor -> membuat konstruktor unuk class sehingga pas cetak objek baru harus mengisi argumen konstruktornya
class Animal
{
    public $name;
    public int $age;
    public $color;

    public function __construct($name, $age, $color)
    {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function eat()
    {
        echo "Eat...";
    }

    protected function run()
    {
        echo "rusnn...";
    }

    public function getInfo()
    {
        return "Nama: " . $this->name . "<br> Umur: " . $this->age . "<br>Warna: " . $this->color;
    }
}

$animal = new Animal("ya",1,"y");
echo $animal->eat();
?>
