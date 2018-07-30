DROP DATABASE IF EXISTS user_db;
CREATE DATABASE IF NOT EXISTS user_db;
USE user_db;  
CREATE TABLE users (
  ID       		INT(10)        	NOT NULL   AUTO_INCREMENT,
  email     	VARCHAR(50)   	UNIQUE,
  password  	VARCHAR(10)  	NOT NULL,
  firstname  	VARCHAR(50)		NOT NULL,
  lastname 		VARCHAR(50)		NOT NULL,
  phone	 		VARCHAR(10),
  avatar 		VARCHAR(255),
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ;
USE user_db;
INSERT INTO users(email,password,firstname,lastname,phone) 
VALUES('tan@gmail.com','123','Tân','Huỳnh','0914567432'),
 ('hung@gmail.com','456','Hùng','Phạm','0914747633'),
 ('cuong@gmail.com','789','Cường','Trần','0914747733'),
 ('lam@gmail.com','456','Lâm','Phạm','0914747633'),
 ('si@gmail.com','456','Sĩ','Phan','0914747634')