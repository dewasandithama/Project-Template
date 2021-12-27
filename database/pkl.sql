CREATE DATABASE pkl;

use pkl;

CREATE TABLE ADMIN(
id INT AUTO_INCREMENT,
username VARCHAR(50),
PASSWORD VARCHAR(50),
PRIMARY KEY (id)
);

INSERT INTO ADMIN(username, PASSWORD) VALUES
('admin', SHA1('admin'));

show columns from admin;