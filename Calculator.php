<?php
namespace VoorbeeldUnittest;
class Calculator
{
   public function nummerDrie($str){
      return  substr($str, 0,3)."...". substr($str, -3);
   }

   public function telop ($getal1, $getal2){
      return $getal1 - $getal2;
   }

   public function nummerCheck($str){

      if(gettype($str) !== "string"){
         return "Het moet een string zijn";
         
      }elseif(strlen($str) <= 5){
         return "Te Klein";
      }

      // opdracht 0 
             return substr($str, 0,3)."...". substr($str, -3);
       
   }

}