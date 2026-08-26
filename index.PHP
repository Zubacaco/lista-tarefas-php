<?php

$tarefas = [
    "Estudar PHP",
    "Fazer atividade",
    "Enviar trabalho",
    "Revisar o código"
];

function mostrarTarefas($lista)
{
    echo "<h2>Lista de Tarefas</h2>";

    foreach ($lista as $tarefa) {
        echo "<p>- " . $tarefa . "</p>";
    }
}

mostrarTarefas($tarefas);

?>