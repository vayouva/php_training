<?php
$name = 'Arthur Dent';
$day = 'friday';


if ($name == 'Arthur Dent' && $day == 'Thursday') {
    echo 'I could never get the hang of Thursdays.';
} elseif ($name == 'Marvin' || strtolower($day)) {
    echo "I've got this terrible pain in all the diodes down my left-hand side.";
} else {
    echo 'Is that really a piece of fairy cake?';
}
