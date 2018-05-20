<?php

namespace BrainGames\Games\Progression;

const DESCRIPTION = "What number is missing in this progression?";

function progression($options)
{
    $numberToHide = $options[rand(0, count($options)-1)];
    $options[array_search($numberToHide, $options)] = "..";
    return array ("question" => implode(" ", $options), "answer" => $numberToHide);
}

function start()
{

    $questionAndAnswer = function () {
        $options = range(100, 200, 10);
        $answer = progression($options);

        return array("question" => $answer["question"], "answer" => $answer["answer"]);
    };

    $game = \BrainGames\Game\game(DESCRIPTION, $questionAndAnswer);
    $game();
}
