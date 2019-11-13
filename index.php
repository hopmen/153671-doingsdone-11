<?

require_once('data.php');
require_once('function.php');


if ($con == false) {
    print("Ошибка подключения: "
        . mysqli_connect_error());
}
else {




$content = include_template('main.php', ['projects' => get_projects($user_id, $con) , 'tasks' => get_tasks($user_id, $con)]);

$layout = include_template('layout.php', [
    'content' => $content,
    'page_title' => $page_title
]);

print('<pre>');
var_dump(get_projects($user_id, $con));
var_dump(get_tasks($user_id, $con));
print('</pre>');
print($layout);
}
