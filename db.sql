
CREATE DATABASE IF NOT EXISTS ctf_challenge;
USE ctf_challenge;

CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO users (username, password) VALUES
('admin', 'admin123');
