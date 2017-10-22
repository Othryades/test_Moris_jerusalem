<?php

class CreateTables
{
    public $pdo;

    function __construct()
    {
        $this->pdo = Connection::make();
    }

    function createTable_teacher()
    {

        $createTable = $this->pdo->prepare('CREATE TABLE IF NOT EXISTS teacher (
        TEACHERID INT(11) AUTO_INCREMENT PRIMARY KEY,
        NAME VARCHAR(50) NOT NULL
        )');
        $createTable->execute();

    }

    function createTable_course()
    {

        $createTable = $this->pdo->prepare('CREATE TABLE IF NOT EXISTS course (
        COURSEID INT(11) AUTO_INCREMENT PRIMARY KEY,
        NAME VARCHAR(50) NOT NULL,
        teacher INT(11) NOT NULL,
        FOREIGN KEY (teacher) REFERENCES teacher(TEACHERID) ON DELETE CASCADE
        )');
        $createTable->execute();
    }

    public function create_schema()
    {
        $this->createTable_teacher();
        $this->createTable_course();
        return 'success';
    }

}