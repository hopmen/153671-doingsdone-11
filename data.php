<?php
$show_complete_tasks = rand(0, 1);
$projects = ["Входящие", "Учеба", "Работа", "Домашние дела", "Авто"];
$tasks = [[
    "title" => "Собеседование в IT компании",
    "deadline" => "07.11.2019 23:11",
    "category" => "Работа",
    "status" => false

], [
    "title" => "Выполнить тестовое задание",
    "deadline" => "25.12.2019",
    "category" => "Работа",
    "status" => false
], [
    "title" => "Сделать задание первого раздела",
    "deadline" => "21.12.2019",
    "category" => "Учеба",
    "status" => true
], [
    "title" => "Встреча с другом",
    "deadline" => "22.12.2019",
    "category" => "Входящие",
    "status" => false
], [
    "title" => "Купить корм для кота",
    "deadline" => "25.12.2019",
    "category" => "Домашние дела",
    "status" => false
], [
    "title" => "Заказать пиццу",
    "deadline" => null,
    "category" => "Домашние дела",
    "status" => "25.12.2019"
]];
$page_title = 'Дела в порядке';
