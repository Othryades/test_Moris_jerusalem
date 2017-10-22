<?php

require 'database/Connection.php';
require 'Controllers/Teacher.php';
require 'Controllers/Course.php';
require 'Controllers/CreateTables.php';


$con = Connection::make();


$statement = $con->prepare('select t.NAME AS teacher_name, c.NAME AS course_name from teacher AS t LEFT JOIN course AS c ON t.TEACHERID = c.teacher ');

$statement->execute();

$teachers = $statement->fetchAll(PDO::FETCH_CLASS, 'Teacher');
if(isset($_GET['api']) && $_GET['api'] == 'true'){
    echo json_encode($teachers);
    die();
}



$create= new CreateTables();
$create->create_schema();

require 'views/index.view.php';