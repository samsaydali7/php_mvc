# php_mvc
Starter MVC framework written in PHP for future projects.

## Getting Started
  Get app up and running!
  
### Configuration

You need to edit the file ../app/config/config.php, and set the foloowing:

- Set the host
  ```
  define('DB_HOST', '__HOST__');
  ```
  
- Set database user
  ```
  define('DB_USER', '__DB_USER__');
  ```
  
- Set database password
  ```
  define('DB_PASS', '__DB_PASSWORD__');
  ```
- Set database password
  ```
  define('DB_NAME', '__DB_NAME__');
  ```
- Set app root
  ```
  define('URLROOT', '__ROOT_URL__');
  ```
  **example: http://localhost/mvc 
  ```
  define('URLROOT', 'http://localhost/mvc');
  ```
- Set site name
  ```
  define('SITENAME', '__SITENAME__');
  ```
### Fix Rewriting
You need to edit the file ../public/.htaccess, 4th line , Set the FOLDER_NAME to the folder name having your project(Parent of public and app folders):
```
RewriteBase /FOLDER_NAME/public
```
**example: having public and root folders in folder called mvc: 

```
RewriteBase /mvc/public
```
