<?php namespace non_playable;
require_once('./AbstractEntity.php');

class SimpleCharacterForTest extends AbstractEntity{
    public function __construct(
    string $name, 
    string $race, 
    array $attributeList = array(), 
    string $description){

      $this->name = $name;
      $this->race = $race;
      $this->attributeList = $attributeList;
      $this->description = $description;

    }
    
  }
 /* 
  $jaeyum = new SimpleCharacterForTest(
    "Jaeyum Ariuna", 
    "vanir", 
    ["Body"=>4, "Mind"=>10, "Aspect"=>7], 
    "a good looking and amazing Runic Mage"
  );

  echo $jaeyum;*/
?>