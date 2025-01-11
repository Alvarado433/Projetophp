<?php


include "../vendor/autoload.php";  // Ajuste o caminho conforme necessário


use App\Utilidades\Utilidades;

// Usando o método "mensagem" para exibir a mensagem "teste"
Utilidades::mensagem("teste");
echo "<br>";

// Realizando uma multiplicação (10 * 20)
Utilidades::conta("10", "20", "*");
echo "<br>";

// Realizando uma divisão (10 / 20)
Utilidades::conta("10", "20", "/");
echo "<br>";

// Realizando uma subtração (10 - 20)
Utilidades::conta("10", "20", "-");
echo "<br>";

// Realizando uma soma (10 + 20)
Utilidades::conta("10", "20", "+");