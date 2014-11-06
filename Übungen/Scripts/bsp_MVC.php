<?php 
session_start();    
//Datenbank - Verbindung 
define('MYSQL_HOST', "localhost"); 
define('MYSQL_USER' ,"root"); 
define('MYSQL_PW' ,""); 
define('MYSQL_DB', "mvc_spirig"); 
//beispiel Hyperlink 
//   index.php?show=index 
function application_loader ($ControllerName){ 
    $controller = './application/controller/' . $ControllerName. '.php'; 
    $model = './application/model/' . $ControllerName. '.php'; 
    $view= './application/view/' . $ControllerName. '.php'; 
        include_once($controller) ; 
        include_once($model) ; 
        include_once($view) ;         
} 
if(isset($_GET['show'])){ 
        $lade = $_GET['show']; 
}else{ 
        $lade = 'index'; 
} 
application_loader($lade);   
$controller   = new controller();  
echo $controller->display(); 


?>