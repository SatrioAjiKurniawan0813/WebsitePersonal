CREATE DATABASE toko_jersey;

USE toko_jersey;

CREATE TABLE jerseys (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO jerseys (name, description, price, image) VALUES
('Jersey Home 1', 'Jersey home tim A, nyaman dan stylish.', 250.00, 'https://via.placeholder.com/300'),
('Jersey Away 2', 'Jersey away tim B, kualitas terbaik.', 300.00, 'https://via.placeholder.com/300'),
('Jersey Third 3', 'Jersey third tim C, desain eksklusif.', 350.00, 'https://via.placeholder.com/300');
