# Tutor-App
Proyecto de Hackathon Comteco

**Para iniciar Debes instalar la base de datos**

**Guia Para crear la base de datos**

CREATE DATABASE tutorapp;

**Guia apra crear la tabla usuarios**

CREATE TABLE usuarios (
  id_usuario INT NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(255) NOT NULL,
  correo_electronico VARCHAR(255) NOT NULL UNIQUE,
  contrasena VARCHAR(255) NOT NULL,
  rol VARCHAR(20) NOT NULL,
  PRIMARY KEY (id_usuario)
);

**para ejecutar el proyecto**

 php -S localhost:8000

