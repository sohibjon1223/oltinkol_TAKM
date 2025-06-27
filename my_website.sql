-- my_website.sql

CREATE DATABASE IF NOT EXISTS my_website;
USE my_website;

CREATE TABLE IF NOT EXISTS content (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    body TEXT
);

INSERT INTO content (title, image, body) VALUES
('Xush kelibsiz!', 'banner.jpg', 'Bu admin panel uchun misol matn. Siz bu yerda rasm va matnni ko‘rishingiz mumkin.');
