<?php

namespace BrainGames\Games\Calc;

const DESCRIPTION = "What is the result of the expression?";

function calc($num1, $num2)
{
    $typeOfOperation = rand(0, 2);
    switch ($typeOfOperation) {
        case 0:
            $operation = $num1 . "+" . $num2;
            $result = $num1 + $num2;
            break;
        case 1:
            $operation = $num1 . "-" . $num2;
            $result = $num1 - $num2;
            break;
        case 2:
            $operation = $num1 . "*" . $num2;
            $result = $num1 * $num2;
            break;
    }
    return ["question" => $operation, "answer" => $result];
}

function start()
{

    $questionAndAnswer = function () {
        $num1 = rand(1, 20);
        $num2 = rand(1, 20);
        $questionAndAnswer = calc($num1, $num2);

        return array("question" => $questionAndAnswer["question"], "answer" => $questionAndAnswer["answer"]);
    };

    $game = \BrainGames\Game\game(DESCRIPTION, $questionAndAnswer);
    $game();
}
