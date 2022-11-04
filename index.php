<?php
session_start();
if(isset($_SESSION['logado'])){
    if($_SESSION['logado']==0){
        header('location:login.php');
    }
    }else{
        header('location:login.php');
    }

?>




<?php
include_once('./partials/header.php');


?>

<?php
include_once('./components/navbar.php');
?>
<img src="./images/perfil.png" width="400px" height="500px">
</BR>
</BR>

<?php
include_once('./components/carousel.php');
?>

<h1>

<?= $_SESSION['logado'];  ?>


Meu nome é Karine vitória
Tenho 16 anos.
Estudande de front-end
Curso:informática para internet através do programa da Fiec.SP.
Objetivo desenvolver sites e aplicativos.</h1>
<?php
include_once('./partials/footer.php');
?>    

