-- Crear la base de datos "login" si no existe
CREATE DATABASE IF NOT EXISTS login;

-- Seleccionar la base de datos "login"
USE login;

-- Crear la tabla "usuarios" con los campos "id," "username," y "password"
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
