<?php namespace action;

//AbstractDiceClass cannot be instancied
  abstract class AbstractDice{
  //Attributes 
    protected $amountOfFaces; //Amount of sides of the dice (Max Result)
    protected $lowestFace; //Lowest value permited in this dice (Min Result)
    protected $faceUp; //The side side facing up (The Result)

  //Constructor of a basic dice 
    public function __construct(
      int $amountOfFaces = 20, //Default dice set as D20
      int $lowestFace = 1, //All d20s start with 1
      
    ){
      $this->amountOfFaces = $amountOfFaces;
      $this->lowestFace = $lowestFace;
    }

  //Getters and Setters
    public function setAmountOfFaces(int $amount){
      $this->amountOfFaces = $amount;
    }

    public function getAmountOfFaces(){
      return $this->amountOfFaces;
    }

    private function setFaceUp($face){
      $this->faceUp = $face;
    }
    public function getFaceUp(){
      return $this->faceUp;
    }

    protected function setLowestFace($lowestFace){
      $this->lowestFace = $lowestFace;
    }
    public function getLowestFace(){
      return $this->lowestFace;
    }

  //Roll Dice Function
    public function roll(){

    //Checking if the lowestFace is set to avoid NULL values
      if(empty ($this->getLowestFace)){
        $this->setLowestFace(1);
      };
    
    //The Rand Function to draw the dice value
      $roll = rand($this->lowestFace, $this->amountOfFaces);
      $this->setFaceUp($roll); //Setting the result to faceUp

    //Return the faceUp attribute
      return $this->getFaceUp();
    }
    
  }

//You can put test codes here

/*
  $d10 = new AbstractDice(amountOfFaces:10);
  var_dump($d10->roll());*/



?>