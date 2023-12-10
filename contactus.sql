CREATE DATABASE IF NOT EXISTS NewsPortal;
USE NewsPortal;

CREATE TABLE IF NOT EXISTS ContactUs (
    contact_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);