<?php

$phpArray = array("Hà Nội", "Hồ Chí Minh", "Đà Nẵng");

class Student {
    public $name;

    public $age;

    public $location;

    public function __construct ($name, $age, $location) {
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }
}

$Loi = new Student("Nguyễn Văn Lợi", 25, "Hà Nội");

echo "<pre>";
print_r($phpArray);
echo "</pre>";

echo "<pre>";
print_r($Loi);
echo "</pre>";

$phpJson1 = json_encode($phpArray);
$phpJson2 = json_encode($Loi);

echo "<pre>";
print_r($phpJson1);
echo "</pre>";

echo "<pre>";
print_r($phpJson2);
echo "</pre>";