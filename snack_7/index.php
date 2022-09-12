<?php
// students array
$students = [
    [
        'name' => 'Kevin',
        'last_name' => 'Baly',
        'grades' => [
            9,
            10,
            10
        ]
    ],
    [
        'name' => 'Altea',
        'last_name' => 'Torelli',
        'grades' => [
            6,
            6,
            8
        ]
    ],
    [
        'name' => 'Amleto',
        'last_name' => 'Merli',
        'grades' => [
            8,
            6,
            10
        ]
    ],
];



for ($i = 0; $i < count($students); $i++){
    // students data elaboration
    $student = $students[$i];
    $student_grades = $students[$i]['grades'];

    // avarage calculation
    $grades_avarage = 0;
    $grades_sum = 0;
    
    for ($x = 0; $x < count($student_grades); $x++){
        $grades_sum += $student_grades[$x];
    };
    
    $grades_avarage = round($grades_sum / count($student_grades), 2);

    echo $student['name'] . " " . $student['last_name'] . " " . $grades_avarage . "<br>";
}

?>