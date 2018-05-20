<?php

namespace BrainGames\Games\Prime;

const DESCRIPTION = "Is this number prime?";

function isPrime($num)
{
    for ($i = 2; $i <= sqrt($num); ++$i) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function start()
{
    $questionAndAnswer = function () {
        $num = rand();
        $answer = isPrime($num) ? "yes" : "no";

        return array("question" => $num, "answer" => $answer);
    };

    $game = \BrainGames\Game\game(DESCRIPTION, $questionAndAnswer);
    $game();
}
