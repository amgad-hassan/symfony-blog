<?php


namespace App\Service;

class RandomNumberService{

 public function getNumberRandom(int $min,int $max){
    return random_int($min,$max);
 }

}
