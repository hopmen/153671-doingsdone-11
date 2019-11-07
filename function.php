<?php

/**
 * Подключает шаблон, передает туда данные и возвращает итоговый HTML контент
 * @param string $name Путь к файлу шаблона относительно папки templates
 * @param array $data Ассоциативный массив с данными для шаблона
 * @return string Итоговый HTML
 */
function include_template($name, array $data = [])
{
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}

function get_count_task($tasks, $project)
{
    $count = 0;
    foreach ($tasks as $task) {
        if ($task["category"] === $project) {
            $count++;
        }
    }
    return $count;
}

function check_urgency_task($date_task){
    $date_task = new DateTime($date_task);
    $diff = $date_task->diff(new DateTime());
    return $diff->format('%a') == 0 ? true : false;
}
