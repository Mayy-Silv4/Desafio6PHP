<?php

// Nível 1: Sem Retorno e Sem Parâmetro


// 1. Mensagem de Boas-Vindas:

function exibirCabecalho(){

echo "<h1> Sistema de Gestão Escolar </h1>";
}

exibirCabecalho();



// 2. Log Simples:

function exibirLog() {
    echo "<p> Log: O sistema iniciou com sucesso em: " . date('d/m/Y') ."</p>";
}

exibirLog();



// 3. Divisor Visual:

function exibirDivisor(){

echo "--------------------------------------------------";

}

exibirDivisor();



// 4. Rodapé Fixo: 

function exibirCopyright(){

echo "<p> © 2024 - Desenvolvido por Mayara.</p>";

}

exibirCopyright();

// Nível 2: Sem Retorno e Com Parâmetros


// 5. Saudação Personalizada: 

function exibirSaudacao($nome){

echo "<p> Olá, $nome , seja bem-vindo ao painel! </p>";

}

exibirSaudacao("Mayara");



// 6. Cálculo de Área Direto:

function exibirAreaTriangulo($base, $altura){

$area = $base  * $altura;
echo "<p> A área do triângulo é: $area </p>";

}
exibirAreaTriangulo(5,4);



// 7. Formatação de Moeda:

function formatarMoeda($valor){

echo " Valor: R$ " . number_format($valor, 2, ',', '.') ;
}

formatarMoeda(1500);



// 8. Lista de Compras:



function exibirListaCompras($itens){

    echo "<ul>";

    foreach($itens as $item){
        echo "<li>$item</li>";
    }

    echo "</ul>";
}

$lista = ["Massa", "Tomate", "Alface", "Picles", "Ovos"];

exibirListaCompras($lista);



// Nível 3: Com Retorno e Sem Parâmetro

// 9. Versão do Sistema: 

function obterVersao(){

$versao = "v1.0.2";
return $versao;

}

$versao = obterVersao();
echo "Você está usando a versão: " . $versao;



// 10. Gerador de Cupom:

function gerarCupom() {

    $codigo = rand(1000, 9999);
    return "<p> CUPOM "  . $codigo ;

}

echo gerarCupom();



// 11. Status do Banco:

function verificarConexao(){

$conexao = true;

if ($conexao){

return true;

}else{

return false;
}
}

if (verificarConexao()){

echo "<p> Conectado!<p>";
}else{

echo "Erro!";
}



// 12. Configuração Global:

function obterFusoHorario(){

return date_default_timezone_get();
}

echo "Fuso horário do servidor: ". obterFusoHorario();



// Nível 4: Com Retorno e Com Parâmetros


// 13. Verificação de Idade: 

function calcularIdade($anoNasc){

$anoAtual = date("Y");
$idade = $anoAtual - $anoNasc;

return $idade;

}

$anoNasc = 2007;
echo  "<p> Você tem " . calcularIdade($anoNasc) . " anos";



// 14. Calculadora de Desconto:

function calcularDesconto($preco, $percentual) {
    $desconto = ($preco * $percentual) / 100;
    $novoValor = $preco - $desconto;
    return $novoValor;
}

// Exemplo de uso
$preco = 200;
$desconto = 15;

$valorFinal = calcularDesconto($preco, $desconto);

echo "<p> Valor com desconto: R$ " . number_format($valorFinal, 2, ",", ".");



// 15. Validação de E-mail: 

function validacaoDeEmail($email) {

    if (str_contains($email, "@")) {
        return true;
    } else {
        return false;
    }
}

$email = "morceguinh0zx@gmail.com";

if (validacaoDeEmail($email)) {
    echo "<p> E-mail válido";
} else {
    echo "E-mail inválido";
}



// 16. Conversão de Unidades: 

function celsiusParaFahrenheit($celsius) {

$fahrenheit = ($celsius * 9/5 ) +32;

return $fahrenheit;

}

$temperaturaC = 30;

echo "<p> Temperatura em Fahrenheit: " . celsiusParaFahrenheit($temperaturaC) . "°F";


?>

