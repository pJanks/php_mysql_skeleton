# **PHP/MYSQL/JS APP ON APACHE**

## **CONFIG**

* Set up a ***.htaccess*** file, in the root directory, to handle routing, containing at least, the following:
  ```
    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^.*$ index.php [QSA,L]
  ```
* Create a MySQL database instance and configure the connection in a ***config.php*** file, or make adjustments as you see fit. See ***sample.config.php*** for the credentials necessary to create a MySQL database connection.
* Errors are recorded in a logs directory containing at least an ***error.log*** file.