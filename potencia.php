<?php

function pot($x, $y)
{
    // if(!is_int($y))
    // {
    //     return 'Não é um número inteiro';
    // }

    if($y < 0)
    {
        $x = 1 / $x;
        $y = $y * -1;
    }

    $total = 1;
    for($i = 0; $i < $y; $i++)
    {
        $total *= $x;
    }
    return $total;
}

$n1 = (int) $_POST['num1'];
$n2 = (int) $_POST['num2'];

$pot = pot($n1, $n2);

echo $pot;
?>