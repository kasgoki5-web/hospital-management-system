CREATE DATABASE hospital;

USE hospital;

CREATE TABLE patients
(
id INT AUTO_INCREMENT PRIMARY KEY,
patient_name VARCHAR(100),
age INT,
disease VARCHAR(100)
);