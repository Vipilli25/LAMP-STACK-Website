# LAMP-STACK-Website
Create a website in PhP &amp; MySQL using LAMP Stack.

## Installation
1:  Installing Apache and Updating the Firewall:

```bash
sudo apt update
sudo apt install apache
	
sudo ufw app list
sudo ufw allow in "Apache Full"
```

2: Installing MySQL :
```bash
sudo apt install mysql-server
sudo mysql_secure_installation
``` 
3: Installing PHP
```bash
sudo apt install php libapache2-mod-php php-mysql
	
sudo nano /etc/apache2/mods-enabled/dir.conf
``` 

4: Restart apache service
```bash
sudo systemctl restart apache2  
sudo systemctl status apache2
```
## Setting files and Database
### Database Setup
Create mysql user and grant privileges to the user
```bash
CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON * . * TO 'user'@'localhost';
```
Login to the mysql user made:
```bash
mysql -u user -p 
```
Creating database and table:
```bash
CREATE DATABASE form;
USE form;
CREATE TABLE form 
    (id INT NOT NULL AUTO_INCREMENT, 
    college_name VARCHAR(55) NOT NULL, 
    name VARCHAR(255) NOT NULL, 
    year VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
    );
```
### PHP File Description
PHP and HTML code written in index.php  in /var/www/html. 
The website contains records of colleges specifically mentioned name, place and establishment year. 
Website also contains a html input form where PHP is used to connect to the database and send the submitted form details to insert into the mysql database.

Create connection to database using: \
$con = new mysqli($server, $username, $password, $database);

Get the values from teh submitted form using: \
$college_name = $_POST["college_name"]; \
$place = $_POST["place"]; \
$year = $_POST["year"];

SQL Query to insert the values into the database: \
$sql = "INSERT INTO data (college_name, place, year) VALUES ('$college_name', '$place', '$year');";

**Check if the submitted values inserted successfully using the command on sql command line:
```bash
SELECT * FROM form;**
```

## Deployment
visit the created website by typing : localhost/vishal/index.php
## Tech Stack
**Front-end:** HTML5, CSS3 \
**Back-end:** Php \
**Database:** Mysql
