<!-- Dense Ranking -->

<?php

    // leaderboard dan skor GITS
    $leaderboard = [100, 100, 50, 40, 40, 20, 10];
    $gits_scores = [5, 25, 50, 120];

    // membuat ranking dari leaderboard
    function denseRanking($scores){
        $ranks = [];
        $rank = 1;
        $prev_score = null;

        foreach($scores as $index => $score){
            if($score !== $prev_score){
                $ranks[$index] = $rank;
                $rank++;
            }else{
                $ranks[$index] = $ranks[$index - 1];
            }

            $prev_score = $score;
        }

        return $ranks;
    }

    $rankings = denseRanking($leaderboard);

    // mencari ranking GITS berdasarkan leaderboard
    function findRank($leaderboard, $rankings, $gits_score){
        foreach($leaderboard as $index => $score){
            if($gits_score >= $score){
                return $rankings[$index];
            }
        }

        return end($rankings) + 1;
    }

    $gits_ranks = [];

    foreach($gits_scores as $gits_score){
        $gits_ranks[] = findRank($leaderboard, $rankings, $gits_score);
    }

    echo implode(' ', $gits_ranks) . PHP_EOL;

?>