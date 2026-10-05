<?php

echo "=== VALIDADOR DE SENHA ===\n\n";

echo "Digite uma senha: ";
$senha = trim(fgets(STDIN));

$valida = true;

if (strlen($senha) < 8) {
    echo "A senha precisa ter pelo menos 8 caracteres.\n";
    $valida = false;
}

if (!preg_match("/[A-Z]/", $senha)) {
    echo "A senha precisa ter uma letra maiúscula.\n";
    $valida = false;
}

if (!preg_match("/[a-z]/", $senha)) {
    echo "A senha precisa ter uma letra minúscula.\n";
    $valida = false;
}

if (!preg_match("/[0-9]/", $senha)) {
    echo "A senha precisa ter um número.\n";
    $valida = false;
}

if (!preg_match("/[^a-zA-Z0-9]/", $senha)) {
    echo "A senha precisa ter um caractere especial.\n";
    $valida = false;
}

if ($valida) {
    echo "\nSenha válida!\n";
} else {
    echo "\nSenha inválida!\n";
}

?>