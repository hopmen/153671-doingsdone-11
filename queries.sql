INSERT INTO `users`(`email`, `name`, `password`) VALUES
    ('test@test.test', 'Человек', 'passwords'),
    ('rest@test.rest', 'Женщина', 'passwords2');

INSERT INTO `projects` (`name`, `user_id`) VALUES
    ('Входящие', 1),
    ('Учеба', 2),
    ('Работа', 2),
    ('Домашние дела', 2),
    ('Авто', 1);

INSERT INTO `tasks` (`status`, `name`, `deadline`,  `project_id`, `user_id`) VALUES
    (0, 'Собеседование в IT компании', '2019-11-01 00:00:00', 3, 1),
    (0, 'Выполнить тестовое задание', '2019-12-25 00:00:00', 3, 1),
    (1, 'Сделать задание первого раздела', '2019-12-21 00:00:00', 2, 1),
    (0, 'Встреча с другом', '2019-11-05 00:00:00', 1, 1),
    (0, 'Собеседование дворника', '2019-12-08 00:00:00', 5, 2),
    (0, 'Очистить крышу от снега', '2019-12-29 00:00:00', 4, 2),
    (1, 'Помыть плиту', '2019-12-21 00:00:00', 1, 2);

INSERT INTO `tasks`(`status`, `name`, `project_id`, `user_id`) VALUES
    (0, 'Купить корм для кота', 1, 1),
    (0, 'Заказать пиццу', 2, 1),
    (0, 'Купить молока', 3, 2);

/* получить список из всех проектов для одного пользователя*/
SELECT p.name from projects p
INNER JOIN users u
ON	 p.user_id = u.id
WHERE u.id = 2

/* получить список из всех задач для одного проекта */
SELECT t.name FROM tasks t
INNER JOIN projects p
	ON t.project_id = p.id
WHERE p.id = 1

/* пометить задачу как выполненную */
UPDATE tasks SET status=1 WHERE id=5

/* обновить название задачи по её идентификатору */
UPDATE tasks SET name=id WHERE id=3
