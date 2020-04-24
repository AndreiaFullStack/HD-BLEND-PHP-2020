<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 -PHP</title>
</head>
<body>
    <?php
        // para criar uma variavel no PHP utilizar $ e o nome da variavel que deseja em seguida.
        $titulo = "Primeira aula de PHP";
    ?>

    <h1>
        <?php
            //para exibir algo na tela com PHP utilizamos o echo
            echo $titulo;
        ?>
    </h1>

    <hr>
    <h1>Condicionais</h1>

    <p> IF / ELSE </p>
    <p> Crie uma função que valide se uma pessoa pode votar ou não. De forma que se a pessoa
    tiver a idade entre 16 a 17 ou for mais de 70 anos, iremos mostrar na tela Voto Facultativo, caso contrário, 
    se for maior de idade iremos monstrar na tela voto obrigatório, e caso for menor de 16 não vota</p>

    <?php
        function podeVotar($idadeEleitor) {
            if($idadeEleitor >=16 && $idadeEleitor < 18 || $idadeEleitor > 70) {
            return "Voto facultativo";
        } else if ($idadeEleitor >= 18 && $idadeEleitor <=70) {
            return "Voto Obrigatório";
        } else {
            return "Não Vota";
        }
    }
            
    ?>

    R: Foi criado no código a função podeVotar e foi informado como parâmetro o valor 17,
    como resultado da função tivemos: <br> <?php echo podeVotar(17) ?>

    <br>
    <p> SWITCH CASE</p>

    <p> Crie uma função que valide se um número é 0 e retorne que é igual a 0, 
    se é 1 e retorne que é igual a 1, ou se é a 2 e 
    ou se é 2 e retorne que é igual a 2. Caso contrário retorne que o numero é maior que 2. 
    Utilizando switch case. </p>
    </p>
    <?php
        function validaNumero($i) {
            switch ($i) {
            case 0:
            echo "$i igual 0";
            break;
        case 1:
            echo "$i igual 1";
            break;
        case 2:
            echo "$i igual 2";
            break;
        default:
            echo "qualquer número maior que 2";
            break;

}

}

?>
<p> Crie uma função que receba o genero de uma pessoa, onde la poderá informar Masculino ou Feminino, se informar 
masculino iremos retornar a mensagem Genero informado foi masculino, se informar Feminino iremos retornar a mensagem genero
caso contrario iremo retornar outros. Utilizando Shitch
<?php
        function validaGenero($x) {
            switch ($x) {
            case 'masculino':
                return "Masculino";
                break;
            case 'feminino':
                return "Feminino";
                break;
            default:
                return "Outros";
            break;
        }
      

}


?>


R: Foi criado no código a função validaGenero e foi informado como parâmetro a string Feminino,
como retorno da função tivemos: <br> <?php echo validaGenero(2); ?>

<hr>
<h1>Arrays</h1>
<p> Arrays Simples </p>

<?php
    // declarando array vazio
    $animais = [];
    // o array simples so tem os valores, não nos preocupamos em controlar as posições
    $animais = ["Leão", "Girafa", "Cachorro", "Gato", 1, true];


    // uma forma de debugar variavies no php para saber os tipos, valores, tamanho dos valores.
    echo "<pre>";
    var_dump ($animais);
    echo "</pre>";

?>
<p>Array Associativo</p>

<?php
    //o array associativo nos dá a possibilidade de atribuir valores as nossas posições
    $usuario = [
            "nome" => "Victor", 
            "email" = "andreiagestaocultural@gmail.com",


?>

    </body>
</html>