<?php
$show_complete_tasks = rand(0, 1);

$page_title = 'Дела в порядке';
$user_id = 1;

$bd_host = '127.0.0.1';
$bd_user = 'root';
$bd_password = '';
$bd_data_base = 'doingsdone';

$con = mysqli_connect($bd_host, $bd_user, $bd_password, $bd_data_base);
mysqli_set_charset($con, 'utf8');


function get_projects($user_id, $con){
    $sql_query = "SELECT p.name from projects p INNER JOIN users u ON p.user_id = u.id WHERE u.id = '$user_id'";
    $result = mysqli_query($con, $sql_query);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

    return  $rows;
}
function get_tasks($user_id, $con){
    $sql_query = "SELECT t.name FROM tasks t INNER JOIN projects p ON t.project_id = p.id WHERE p.id = '$user_id'";
    $result = mysqli_query($con, $sql_query);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

    return  $rows;
}
