<?php
if (!empty($_POST['delete']))
{
    require ("./students.php");
    $students_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';
    deleteStudent($student_id);
}
header("Location:student-list.php");
?>