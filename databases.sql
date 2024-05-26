
CREATE TABLE servicios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    descripcion TEXT,
    imagen VARCHAR(255)
);

CREATE TABLE contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    correo VARCHAR(255),
    telefono VARCHAR(20),
    mensaje TEXT
);

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(255),
    contraseña VARCHAR(255)
);

CREATE TABLE categorias_servicios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100)
);

CREATE TABLE servicios_por_categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    servicio_id INT,
    categoria_id INT,
    FOREIGN KEY (servicio_id) REFERENCES servicios(id),
    FOREIGN KEY (categoria_id) REFERENCES categorias_servicios(id)
);
