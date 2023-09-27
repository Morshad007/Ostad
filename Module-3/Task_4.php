<?php

function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / count($grades);
        echo "Average Grade for $student: $averageGrade \n";
    }
}


$studentGrades = [
    'student1' => ['Math' => '84', 'English' => '95', 'Science' => '88'],
    'student2' => ['Math' => '87', 'English' => '78', 'Science' => '84'],
    'student3' => ['Math' => '65', 'English' => '82', 'Science' => '78'],
];
calculateAverageGrades($studentGrades);


?>