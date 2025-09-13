<?php
function saludar($nombre): string {
    return "Hola $nombre";
}

function saludo($nombre): void
{
    echo "Hola $nombre";
}

echo saludar("Pepe");
echo '<br>';
saludo(nombre: 'Ana');
echo '<br>';
saludo();

function sumar(...$valores): int {
    $rstl=0;
    for ($i= 0; $i<count(value: $valores); $i++) {
        $rstl += $valores[$i];
    }
    return $rstl;
}
echo '<br>';
echo sumar(1, 2, 3, 4);
?>