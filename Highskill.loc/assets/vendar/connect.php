<?php

$connect = mysqli_connect('127.0.0.1:3306', 'root', 'root', 'highskill');
if(!$connect){
    die('error connect to database');
}