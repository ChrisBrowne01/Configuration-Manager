<!-- Configuation Manager -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuation Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body>
    <?php
    # --- 1. Create a New File: ---
    // The main script for your configuration manager running on PHP version 7.2.6.

    # --- 2. Define Basic Constants: ---
    # Database Configuration Constants (using environment variables)
    define('DB_HOST', getenv('DB_HOST') ?: 'localhost'); // Fallback to 'localhost' if not set
    define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root'); 
    define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'root'); 
    define('DB_NAME', getenv('DB_NAME') ?: 'myapp_db'); 

    # Application Information Constants
    define('APP_NAME', 'MyPHPApp');
    define('APP_VERSION', '1.0.0');
    # Debug Mode Constant
    define('DEBUG_MODE', getenv('APP_DEBUG') ? 'Enabled' : 'Disabled'); // Set to 'Enabled' for development environments
    // define('DEBUG_MODE', getenv('APP_DEBUG') === 'true' ? true : false); // Set to 'Disabled' for production enviroments

    # DEBUG_MODE, it checks if the APP_DEBUG environment variable is explicitly set to the string 'true'

    # Typically these constrants would be safer stored a '.env' file as Python constants:
    # DB_HOST = "localhost"
    
    # --- 3. Define an Array Constant: ---
    // Create an array constant to store supported languages for the application.
    define('SUPPORTED_LANGUAGE', ['en' => 'English', 'es' => 'Spanish', 'fr' => 'French']);

    # --- 4. Create Display Functions: ---
    // Implement a function to display database configuration.
    function db_config_details() {
      echo "<h3>Database configuration:</h3>";
      echo "Host: " . DB_HOST . "<br>";
      echo "User: " . DB_USERNAME . "<br>";
      echo "Database: " . DB_NAME . "<br>";
    }
    
    // Create a function to show application information.
    function app_info() {
      echo "<h3>Application Information:</h3>";
      echo "Name: " . APP_NAME . "<br>";
      echo "Version: " . APP_VERSION . "<br>";
      echo "Debug Mode: " . (DEBUG_MODE ? 'Enabled' : 'Disabled') . "<br>";
    }
    
    // Write a function to list supported languages.
    function supported_lang() {
      echo "<h3>Supported Languages:</h3>";
      foreach (SUPPORTED_LANGUAGE as $lang => $language) {
        echo "$lang: $language<br>";
      }
    }
    
    # --- 5. Demonstrate Constant Usage: ---
    echo "<h2>PHP Constants - Configuration Manager</h2><br>";
    db_config_details();
    echo "<br>";
    app_info();
    echo "<br>";
    supported_lang();
    echo "<br>";
    
    # --- 6. Case-Sensitivity Demonstration: ---
    /* PHP version 8.2.0 and later, the Constants Argument #3 ($case_insensitive) 
     * is ignored since declaration of case-insensitive constants is no longer supported. 
     * PHP 7.3: Defining case-insensitive constants is deprecated.
     * PHP 7: The value parameter can also be an array.
     * PHP 5: The value parameter must be a string, integer, float, boolean or NULL. 
     */

    echo "<h3>Case-insensitivity demonstration:</h3>";
    echo "APP_NAME: " . APP_NAME . "<br>";
    echo "app_name: " . (defined('app_name') ? app_name : 'Not accessible') . "<br>";
    
    # --- 7. Global Scope Demonstration: ---
    echo "<h3>Testing constant scope in function:</h3>";
    echo "APP_NAME inside function: " . "<br>";
    

    # --- 8. Error Handling: ---
    echo "<h3>Error handling demonstration:</h3>";
    echo "Error: " . "<br>";

    # --- 11. Extend the Project (Optional): ---


    ?>
  </body>
</html>