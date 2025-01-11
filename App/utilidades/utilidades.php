<?php

namespace App\Utilidades;

class Utilidades
{
    // Tornando o método estático
    public static function mensagem(string $mensagem): void
    {
        echo $mensagem;
    }

    public static function conta(int $n1, int $n2, string $conta): void
    {
        switch($conta):
            case "+":
                $soma = $n1 + $n2;
                self::mensagem("O resultado da soma é: " . $soma);
                break;
            case "-":
                $subtrair = $n1 - $n2;
                self::mensagem("O resultado da subtração é: " . $subtrair);
                break;
            case "*":
                $multi = $n1 * $n2;
                self::mensagem("O resultado da multiplicaçao é: " . $multi);
                break;    
            case "/":
                if ($n2 != 0) {
                    $divisao = $n1 / $n2;
                    self::mensagem("O resultado da divisão é: " . $divisao);
                } else {
                    self::mensagem("Erro: divisão por zero!");
                }
                break;
            default:
                self::mensagem("Operação inválida!");
                break;
        endswitch;
    }
}
