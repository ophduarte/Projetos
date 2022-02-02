<?php echo 

$pagina = 'home';

if(isset($_GET['pagina'])){
$pagina = $_GET ['pagina'];

}

include 'header.php';

switch ($pagina){

case 'equipe': 
    include 'equipe.php';
    break;

default: 
    include 'app/views/home.php';
    break;
}

include 'footer.php';