<!-- Configuation Manager -->

<?php
// The main script for your configuration manager running on PHP version 7.2.6.

# Database Configuration Constants
define('DB_HOST', 'localhost'); # Replace with actual host name
define('DB_USERNAME', 'admin'); # Replace with actual username
define('DB_PASSWORD', 'root'); # Replace with actual password
define('DB_NAME', 'database_name'); # Replace with the database name

# Application Information Constants
define('APP_NAME', 'Permit Holder Parking App');
define('APP_VERSION', '1.0.0');
define('APP_DEBUG', 'true'); # Set to false for production enviroments

# Typically these would be safer stored a '.env' file as Python constants
# i.e. DB_HOST = "localhost"
 

?>