<?php

namespace App\Utilidades;

class Utilidades
{
    // Tornando o método estático
    public static function mensagem(string $mensagem): void
    {
        echo $mensagem;
    }

        // Método criado para realizar operações matemáticas básicas
    public static function conta(int $n1, int $n2, string $conta): void
    {
        // Estrutura de controle para determinar qual operação será executada
        switch($conta):
            case "+": // Caso a operação seja soma
                $soma = $n1 + $n2; // Realiza a soma dos dois números
                self::mensagem("O resultado da soma é: " . $soma); // Exibe o resultado
                break;
                
            case "-": // Caso a operação seja subtração
                $subtrair = $n1 - $n2; // Realiza a subtração dos dois números
                self::mensagem("O resultado da subtração é: " . $subtrair); // Exibe o resultado
                break;
                
            case "*": // Caso a operação seja multiplicação
                $multi = $n1 * $n2; // Realiza a multiplicação dos dois números
                self::mensagem("O resultado da multiplicação é: " . $multi); // Exibe o resultado
                break;
                
            case "/": // Caso a operação seja divisão
                if ($n2 != 0) { // Verifica se o divisor não é zero
                    $divisao = $n1 / $n2; // Realiza a divisão dos dois números
                    self::mensagem("O resultado da divisão é: " . $divisao); // Exibe o resultado
                } else {
                    self::mensagem("Erro: divisão por zero!"); // Exibe mensagem de erro para divisor zero
                }
                break;
                
            default: // Caso o operador fornecido seja inválido
                self::mensagem("Operação inválida!"); // Exibe mensagem de erro
                break;
        endswitch;

    }
}
