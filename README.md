# BRACE Micro MVC PHP framework !

### Micro PHP framework created by [Abd-Elrahman Mohamed](https://www.linkedin.com/in/rahmanii/) 


### The framework's name [BRACE] was chosen by [ Rewan Gameel ](https://www.linkedin.com/in/rewan-gameel-022459179/)




### Disclaimer

It's not advisable to use this for live projects as this is still an alpha project I'm using to learn and exercise.
If you are inclined to help with bugs corrections and developing new features you are free to do so.

## Getting Started

Copy the project in your folder and install the database dump in your PhpMyAdmin.
Follow the instructions to complete the installation.

### Prerequisites

* Apache Server
* PHP 5.6+
* Node.js
* Mysql Database


Install [XAMPP](https://www.apachefriends.org/it/index.html) for an easy quickstart


### Config File

Modify the app/config/config.php file according to your needs. You can use example.config.php file inside the same folder as an example based on my local settings.

```
//Database Configuration
define('DB_HOST', '<databaseHost>');
define('DB_USER', '<databaseUser>');
define('DB_PASS', '<databasePassword>');
define('DB_NAME', '<databaseName>');
```

Modify it like this

```
//Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'brace');
```

### htaccess file

Modify che .htaccess file inside the public folder to match the name of your installation folder

### Install the Database

Create a database of your choice in PhpMyAdmin and import the traversy_mvc.sql file in it.


## Built With

* PHP



## Authors

* **Abd-Elrahman Mohamed** 


## License

This project is licensed under the MIT License

