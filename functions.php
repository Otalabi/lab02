<?php

function getLetterGrade($average) {
    if ($average >=90) {
      return $average. '% - Letter Grade: A';
    } elseif ($average >=80) {
        return $average. '% - Letter Grade: B';
    } elseif ($average >= 70) {
        return $average. '% - Letter Grade: C';
    } elseif ($average >= 60) {
        return $average. '% - Letter Grade: D';
    } else {
        return $average. '% - Letter Grade: F';
    }
}

?>

