<?php 
abstract class dada{ 
    public static function hallo(){ 
         
    } 
} 
dada::hallo(); 

class neu extends test{ 
    public function __construct(){ 
        parent::__construct(); 
        dada::hallo(); 
    } 
} 

class test{ 
    public function __construct(){ 
         
    } 
    public function hallo($wert){ 
        echo 'hallo'; 
        echo $wert; 
    } 
    public function get($zahl){ 
        return $zahl+2; 
    } 
    public function get2($text){ 
        return $text.'hhhh'; 
    } 
} 
$meine = new test(); 
$meine->hallo('הההgggiii'); 
echo $meine->get(7); 
echo $meine->get2('hh'); 
?>