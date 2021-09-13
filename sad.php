<?php
class Worker 
{
    public $name,$age,$salary
}
function Work()
{
$worker = new Worker;
$worker->$name = "Иван";
$worker->$age = "25";
$worker->$salary = "1000";
}
print_r(Work);