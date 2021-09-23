<?php
session_start();
    require_once 'connect.php';

    $FullName = $_POST['FullName'];
    $Login = $_POST['Login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $SecondPassword = $_POST['SecondPassword'];

if($SecondPassword === $password){

}else{
    die('Дурачок, пароли не совпадают');
}