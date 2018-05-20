<?php

namespace BrainGames\Game;

use function \cli\line;
use function \cli\prompt;

function game($description, $questionAndAnswer)
{
    return function () use ($description, $questionAndAnswer) {
        line('Welcome to the Brain Games!');
        $playerName = prompt('May I have your name?');
        line("Hello, %s!", $playerName);
        line($description);
        $points = 0;
        while ($points < 3) {
            $result = $questionAndAnswer();
            line("Question: %s", $result["question"]);
            $playerAnswer = \cli\prompt('Your answer');
            if ($playerAnswer == $result["answer"]) {
                ++$points;
                line("Correct!");
            } else {
                line("This is wrong answer ;(. Correct answer was %s. Let's try again!", $result["answer"]);
            }
        }
        line("Congratulations, %s! You are the winner!", $playerName);
    };
}
