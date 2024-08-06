<?php
 /*1- Forneça a data atual em PHP na tela, juntamente com as horas, minutos e segundos.

date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');

*/

/* 2- Forneça a data e hora atual com o fuso-horário do Brasil e um fuso-horário da Ásia.

echo (" Fuso horario do Brasil: <br/>");
date_default_timezone_set('America/Sao_paulo');
echo date('d/m/Y H:i:s');
echo (" <br/> Fuso horario da Ásia: <br/>");
date_default_timezone_set('Asia/Aden');
echo date ('d/m/y H:i:s');

*/

/* 3- Chame o dia do mês na tela.

echo date('d/M');

*/

/* 4- Chame o dia da semana na tela.

echo date('D');

*/ 

/* 5- Declare um array qualquer.

$listaQualquer=['item1', 'item3', 'item7', 'item1Bilhao', 'itemInfinito'];

*/

/* 6- Considere o seguinte array: Acesse pra mim a posição 5 e a 10 na tela.

$palavras = ["maçã", "banana", "laranja", "uva", "manga", "abacaxi", "pêssego",
"kiwi", "morango", "melancia"];



echo $palavras[4] .'<br/>';
echo $palavras[9]; 

*/

 /* 7- Faça um array associativo.

$dados=[
    'nome' => "ribino",
    'idade' => "28 aninhos de idade",
    'contato' => "Não possui meios de contato"
];

*/

/* 8- Faça um array multidimensional;

$computadores=[
    [
        'computador' => 'Numero A1',
        'armazenamento' => '540GB',
        'memoria RAM' => '16GB'
    ],
    [
        'computador' => 'Numero A2',
        'armazenamento' => '240GB',
        'memoria RAM' => '8GB'
    ]
    
];

*/

/* 9- Considere o array da questão 6. Verifique se existe a fruta ameixa com uma função nativa que retorne um valor booleano.
// Tirar do comentario a Questão 6 para funcionar corretamente.
$existe=in_array('ameixa',$palavras);

echo $existe;

*/

/* 10- Demonstre como usar a função in_array().

$garrafinha =['agua','refrigerante','suco'];

$existe = in_array('agua' ,$garrafinha);
echo $existe;
//caso exista ele irá retornar o valor '1', caso nao, ele não retornará nada.

*/

/* 11- Considere o array: Conte quantos elementos tem e printe na tela, usando uma função nativa.

$palavras = array( "casa", "carro", "gato", "cachorro", "árvore", "mesa", "computador",
"telefone", "livro", "janela", "cadeira", "bicicleta", "ponte", "cidade", "rio", "floresta",
"montanha", "praia", "sol", "lua", "estrela", "mar", "oceano", "planeta", "universo", "flor",
"jardim", "grama", "pássaro", "peixe", "tigre", "leão", "elefante", "girafa", "macaco", "banana",
"maçã", "laranja", "uva", "melancia", "kiwi", "pêssego", "abacaxi", "morango", "tomate",
"pipoca", "chocolate", "sorvete", "pizza", "hambúrguer" );

$contarA = count($palavras);
echo $contarA . ' elementos';

*/

/* 12-  Mostre as chaves do array associativo criado na questão 7.
//Remover a questão 7 do comentario para funcionar corretamente.

$numeroChaves = array_keys($dados);
print_r ($numeroChaves);

*/

/* 13-Mostre um exemplo de código usando explode e implode.
    //Explode
    $texto = 'era,uma,vez,um,pudim,apaixonado';
    $teste = explode(',' , $texto , -1);
    print_r ($teste);

    //Implode
    $teste2 = implode(' ' , $teste);
    print_r ('<br/>' . $teste2);

    */