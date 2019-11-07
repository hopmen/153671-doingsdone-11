<?

require_once('data.php');
require_once('function.php');

$content = include_template('main.php', ['projects' => $projects, 'tasks' => $tasks]);

$layout = include_template('layout.php', [
    'content' => $content,
    'page_title' => $page_title
]);

print($layout);
