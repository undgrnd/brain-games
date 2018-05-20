<?php

namespace BrainGames\Games\Even;

const DESCRIPTION = "Answer \"yes\" if number even otherwise answer \"no\".";

function isEven($num)
{
    return $num % 2 == 0;
}

function start()
{
    $questionAndAnswer = function () {
        $question = rand(1, 20);
        $answer = isEven($question) ? "yes" : "no";

        return array("question" => $question, "answer" => $answer);
    };

    $game = \BrainGames\Game\game(DESCRIPTION, $questionAndAnswer);
    $game();
}
