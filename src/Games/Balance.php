<?php

namespace BrainGames\Games\Balance;

const DESCRIPTION = "Balance the given number.";

function balance($num)
{
    $digits = str_split($num);
    while (max($digits) - min($digits) > 1) {
        $digits[array_search(max($digits), $digits)] = max($digits) - 1;
        $digits[array_search(min($digits), $digits)] = min($digits) + 1;
    }
    asort($digits);
    return implode($digits);
}

function start()
{

    $questionAndAnswer = function () {
        $num = rand(1234, 5678);
        $answer = balance($num);

        return array("question" => $num, "answer" => $answer);
    };

    $game = \BrainGames\Game\game(DESCRIPTION, $questionAndAnswer);
    $game();
}
