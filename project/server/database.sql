CREATE DATABASE informacaoes;

USE informacaoes;

CREATE TABLE dados(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)UNIQUE,
    password VARCHAR(100)
);

SELECT * FROM dados;
