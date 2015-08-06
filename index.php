<?php
include "functions.php";
$scores = array();

if (!empty($_POST['quiz1'])) $scores[0] = $_POST['quiz1'];
if (!empty($_POST['quiz2'])) $scores[1] = $_POST['quiz2'];
if (!empty($_POST['quiz3'])) $scores[2] = $_POST['quiz3'];
if (!empty($_POST['quiz4'])) $scores[3] = $_POST['quiz4'];
if (!empty($_POST['quiz5'])) $scores[4] = $_POST['quiz5'];
if (!empty($_POST['quiz6'])) $scores[5] = $_POST['quiz6'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Talabi Lab 11</title>
    <script type="text/javascript">
        window.onload=function() {
            document.getElementById('quiz1').focus();
        }
    </script>
    </head>
<body>
<form action="." method="post">
    <h2>Enter Quiz Scores</h2>
    <label>Quiz 1: <input name="quiz1" id="quiz1" value="<?php if (!empty($scores[0])) echo $scores[0]; ?>">%</label><br>
    <label>Quiz 2: <input name="quiz2" value="<?php if (!empty($scores[1])) echo $scores[1]; ?>">%</label><br>
    <label>Quiz 3: <input name="quiz3" value="<?php if (!empty($scores[2])) echo $scores[2]; ?>">%</label><br>
    <label>Quiz 4: <input name="quiz4" value="<?php if (!empty($scores[3])) echo $scores[3]; ?>">%</label><br>
    <label>Quiz 5: <input name="quiz5" value="<?php if (!empty($scores[4])) echo $scores[4]; ?>">%</label><br>
    <label>Quiz 6: <input name="quiz6" value="<?php if (!empty($scores[5])) echo $scores[5]; ?>">%</label><br>
    <p><input type="submit" value="Find Average of 5 High Scores"></p>
</form>
<?php
if (count($scores) == 6) {
    rsort($scores, SORT_NUMERIC);
    echo '<h2>Graded Quizzes</h2>';
    for ($arrayIndex = 0; $arrayIndex <= 4; $arrayIndex++) {
        $total += $scores[$arrayIndex];
    }
    $average = number_format(($total / 5), 2);
    for ($x = 0; $x <= 4; $x++) {
        echo($scores[$x] . '%');
        echo "<br>";
    }
    echo '<h2>Dropped Score</h2>';
    echo(min($scores) . '%' . "<br>");
    echo '<h2>Quiz Average</h2>';
    echo '<p>' . getLetterGrade($average) . '</p>';
} else if (!empty($scores)) {
    ?><h3><?php echo "Please enter scores in all textboxes." ?></h3><?php
}
?>
</body>
</html>