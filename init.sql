CREATE DATABASE IF NOT EXISTS jogos_db;

USE jogos_db;

CREATE TABLE IF NOT EXISTS jogos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    data_lancamento DATE NOT NULL,
    desenvolvedor VARCHAR(255) NOT NULL
);

INSERT INTO jogos (titulo, genero, data_lancamento, desenvolvedor) VALUES
('The Last of Us', 'Acao', '2013-06-14', 'Naughty Dog'),
('Grand Theft Auto V', 'Acao/Aventura', '2013-09-17', 'Rockstar Games'),
('The Witcher 3: Wild Hunt', 'RPG', '2015-05-19', 'CD Projekt Red'),
('Dark Souls III', 'RPG', '2016-03-24', 'FromSoftware'),
('Red Dead Redemption 2', 'Acao/Aventura', '2018-10-26', 'Rockstar Games');

