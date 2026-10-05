<?php
$nome = $_POST ["nome"];
$cidade = $_POST ["cidade"];

if ($cidade == "curitiba"){
    echo "Olá! $nome, então você é de $cidade, eai curitibano!";
}
else {
    echo "Ola! $nome, então você é de $cidade, show!";
}
?>