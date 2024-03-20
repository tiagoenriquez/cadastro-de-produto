CREATE DATABASE cadastro_de_produtos;

USE cadastro_de_produtos;

CREATE TABLE produtos(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL UNIQUE,
    descricao TEXT,
    valor DECIMAL(10, 2),
    fornecedor VARCHAR(255)
);