<?php

class Connection
{
    public static function make()
    {
        try{

            return new PDO('mysql:host=127.0.0.1;dbname=candidate_test', 'root', '123456');

        } catch (PDOException $e){

            die('could not connect.');

        }
    }
}