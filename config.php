<?php 
include 'dados.php';
$id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($dados as $dado){?>    
        
        <h1>
            <?php 
            if  ($dado['id']==$id){
                echo $dado['nome'];
            ?>           
        </h1>

        <img src="<?php echo $dado['image']; ?>" alt="" >


        <?php }}?>
</body>
</html>