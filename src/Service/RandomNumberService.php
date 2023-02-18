<?php


namespace App\Service;

use Psr\Log\LoggerInterface;

class RandomNumberService{
   /**
    * @var LoggerInterface
    */
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
      
        $this->logger = $logger;
    }

 public function getNumberRandom(int $min,int $max){
    
    return $this->logger->debug(sprintf('this random from %s', random_int($min,$max)));
 }

}
