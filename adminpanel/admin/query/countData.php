<?php 

// Count All Program
// $selProgram = $conn->query("SELECT COUNT(pro_id) as totProgram FROM program_tbl ")->fetch(PDO::FETCH_ASSOC);

// Count All Course
$selCourse = $conn->query("SELECT COUNT(cou_id) as totCourse FROM course_tbl ")->fetch(PDO::FETCH_ASSOC);

// Count All Exam
$selExam = $conn->query("SELECT COUNT(ex_id) as totExam FROM exam_tbl ")->fetch(PDO::FETCH_ASSOC);




 ?>