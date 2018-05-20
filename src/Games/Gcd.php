<?php

namespace BrainGames\Games\Gcd;

const DESCRIPTION = "Find the greatest common divisor of given numbers.";

function gcd($num1, $num2)
{
    while ($num1 != 0 && $num2 != 0) {
        if ($num1 >= $num2) {
            $num1 = $num1 % $num2;
        } else {
            $num2 = $num2 % $num1;
        }
    }
    return $num1 + $num2;
}

function start()
{
    $questionAndAnswer = function () {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $answer = gcd($num1, $num2);

        return array("question" => "$num1 $num2", "answer" => $answer);
    };

    $game = \BrainGames\Game\game(DESCRIPTION, $questionAndAnswer);
    $game();
}
