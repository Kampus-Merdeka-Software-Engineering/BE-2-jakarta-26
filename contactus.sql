CREATE DATABASE IF NOT EXISTS news_portal;
USE news_portal;

CREATE TABLE IF NOT EXISTS ContactUs (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
);
