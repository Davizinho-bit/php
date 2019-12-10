<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    #1 pegar dados da pagina de login "index.php"
    $email=$_POST['email'];
    $senha=md5($_POST['senha']);
    #2 Abrir conexão com banco de dados
    //{servidor, usuario,senha,banco }      
    $con=mysqli_connect('localhost','root','','usuario');
    #3 preparar  a intrusção da seleção
    $sql="select * from usuario where email='".$email."'and senha='".$senha."'";
    #4 executar a intrução no banco 
    $resultado=mysqli_query($con,$sql);

    if(mysqli_num_rows($resultado)>0)
    {header("Location:painel.php");}
    else{ echo "Nao encontrado";}    
    ?>
</body>
</html>