<?php

  function MashiniAxtion($koleso) //Пинимающая функция для машины
  {
    print_r($koleso);
    $koleso->Nitro();
    print_r($koleso);
   
  }

class Mashini  //Общий класс техники
{
    public $run = 0;   
    public $speed = 1;
    
    public function driveForward()
    {
        $this->run += $this->speed;
    }
    public function driveBackward()
    {
        $this->run -= $this->speed;
    }
 
}
class Car extends Mashini  //Класс для легковых машин
{
    public function Nitro()
    {
        $this->speed += 2;
    }
}
class Tank extends Mashini //Класс для танка
{
    public $bullets = 25;
    public function fire()
    {
        $this->bullets -= 1;
    }
}
class Special extends Mashini //Класс для спец техники
{
    public $bucket = "Down";
    public function bucketUp()
    {
        $this->bucket = "Up";
    }
    public function bucketDown()
    {
        $this->bucket = "Down";
    }
}
// создание видов техники
$bmw = new Car(); 
$t34 = new Tank(); 
$tractor = new Special();

//Работа с машиной
print_r($bmw);
echo "<br>";
$bmw->driveForward();

print_r($bmw);
echo "<br>";
$bmw->driveBackward();
print_r($bmw);

echo "<br>";
$bmw->Nitro();
print_r($bmw);

echo "<br>";
$bmw->driveForward();
print_r($bmw);

//Работа с танком

echo "<hr>";
$t34->driveForward();
print_r($t34);

echo "<br>";
$t34->fire();
print_r($t34);

//Работа с трактором

echo "<hr>";
print_r($tractor);

echo "<br>";
$tractor->bucketUp();
print_r($tractor);

MashiniAxtion($bmw);
