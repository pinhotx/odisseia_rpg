<?php namespace non_playable;

  abstract class AbstractEntity{
    protected $name;
    protected $race;
    protected $attributeList;
    protected $description;

    public function getName(){
      return $this->name;
    }

    protected function setName(string $name){
      $this->name = $name;
    }

    public function getRace(){
      return $this->race;
    }
    protected function setRace(string $race){
      $this->race = $race;
    }

    public function getAttributeByName(string $attributeName){
      return $this->attributeList[$attributeName];
    }
    
    protected function setAttributeByName(string $name, int $value){
      $this->attributeList[$name] = $value;
    }

    public function getAttributes(){
      return $this->attributeList;
    }

    protected function setAttributes(array $attributeList){
      $this->attributeList = $attributeList;
    }

    public function getDescription(){
      return $this->name;
    }

    protected function setDescription(string $description){
      $this->description = $description;
    }

    public function __toString(){

      $str = $this->name 
      ." is a "
      .$this->race
      ." character with: ";

      while($element = current($this->attributeList)) {
        $this->attributeList[$element];
        
        $chave = key($this->attributeList);
        $valorAtributo = $this->attributeList[$chave];
        $str = $str . "<br>".$valorAtributo . ' ' . $chave .', ';
        next($this->attributeList);
      }
      $str = $str . " <br> who can be described as " . $this->description;
      return $str;
    } 
    
  }


?>