CREATE DATABASE doingsdone
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE doingsdone;

CREATE TABLE users (
id          INT             AUTO_INCREMENT PRIMARY KEY,
email       VARCHAR(128)    UNIQUE NOT NULL,
password    VARCHAR(64)     NOT NULL,
name        VARCHAR(64)     NOT NULL,
dt_add      TIMESTAMP       DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE projects (
id          INT             AUTO_INCREMENT PRIMARY KEY,
name        VARCHAR(64)     NOT NULL,
user_id int not null,
FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE tasks (
id          INT             AUTO_INCREMENT PRIMARY KEY,
dt_add      TIMESTAMP       DEFAULT CURRENT_TIMESTAMP,
status      BIT             DEFAULT 0,
name        VARCHAR(64)     NOT NULL,
file        VARCHAR(128),
deadline    TIMESTAMP,
user_id int not null,
project_id int not null,
FOREIGN KEY (user_id) REFERENCES users(id),
FOREIGN KEY (project_id) REFERENCES projects(id)
);

CREATE INDEX name ON tasks(name);
