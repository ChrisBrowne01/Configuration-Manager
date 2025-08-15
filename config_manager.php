<?php

/**
 * Project: PHP Constants - Configuration Manager
 * Description: A mini-project to demonstrate the use of PHP constants, including basic constants,
 * array constants, scope, case-sensitivity, and error handling.
 */

# --- 1. Define Basic Constants: ---
// Using define() for database and application settings.
// Constants are typically named in uppercase with underscores.

// Database Configuration Constants (using environment variables)
define('DB_HOST', getenv('DB_HOST') ?: 'localhost'); // Fallback to 'localhost' if not set
define('DB_USERNAME', getenv('DB_USERNAME') ?: 'root'); 
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'root'); 
define('DB_NAME', getenv('DB_NAME') ?: 'myapp_db'); 

// Application Information Constants
define('APP_NAME', 'MyPHPApp');
define('APP_VERSION', '1.0.0');
define('DEBUG_MODE', getenv('APP_DEBUG') ?: 'Disabled'); // Using a boolean value is more common 
// define('DEBUG_MODE', true); // outputs the same result, when used instead of the line above

/**
 * Note: The DEBUG_MODE constant is set based on the APP_DEBUG environment variable.
 * This allows for easy toggling of debug mode without changing code.
 * 
 * DEBUG_MODE, it checks if the APP_DEBUG environment variable is explicitly set to the string 'true'.
 * Using getenv() to fetch environment variables is a common practice for configuration management.
 */

# --- 2. Define an Array Constant: ---
// Array constants were introduced in PHP 7 and are a powerful feature.
define('SUPPORTED_LANGUAGES', [
  'en' => 'English', 
  'es' => 'Spanish', 
  'fr' => 'French'
]);

# --- 3. Create Display Functions: ---
// Functions to encapsulate the logic for displaying different configuration sections.
function displayDbConfig(): void {
  echo "<h3 class='text-2xl font-semibold'>Database configuration:</h3>";
  echo "<p><strong>Host:</strong> " . DB_HOST . "</p>";
  echo "<p><strong>User:</strong> " . DB_USERNAME . "</p>";
  echo "<p><strong>Database:</strong> " . DB_NAME . "</p>";
}

// Create a function to show application information.
function displayAppInfo(): void {
  echo "<h3 class='text-2xl font-semibold mt-2'>Application Information:</h3>";
  echo "<p><strong>Name:</strong> " . APP_NAME . "</p>";
  echo "<p><strong>Version:</strong> " . APP_VERSION . "</p>";
  echo "<p><strong>Debug Mode:</strong> " . (DEBUG_MODE ? 'Enabled' : 'Disabled') . "</p>";
}

// Write a function to list supported languages.
function displaySupportedLanguages(): void {
  echo "<h3 class='text-2xl font-semibold mt-2'>Supported Languages:</h3>";
  echo "<ul>";
  foreach (SUPPORTED_LANGUAGES as $lang => $language) {
    echo "<li><strong>$lang:</strong> $language<li>";
  }
  echo "</ul>";
}

# --- 4. Main Execution Area: ---
// This is where the functions are called to demonstrate the constant usage.
?>
<!-- Configuation Manager -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuation Manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 p-8 font-sans">
    <div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
      <h1 class="text-3xl font-bold mb-6 text-center">PHP Constants - Configuration Manager</h1>

      <?php
      displayDbConfig();
      displayAppInfo();
      $appDebug = getenv('APP_DEBUG');
      $debugMode = getenv('DEBUG_MODE');
      if ($appDebug !== false) { // Check if the environment variable is set
        echo "APP_DEBUG environment variable is set to: " . $appDebug . "<br>";
      } else {
        echo "APP_DEBUG environment variable is not set.<br>";
      }
      if ($debugMode !== false) { // Check if the environment variable is set
        echo "DEBUG_MODE environment variable is set to: " . $debugMode . "<br>";
      } else {
        echo "DEBUG_MODE environment variable is not set.<br>";
      }
      echo "<br>";
      displaySupportedLanguages();
      ?>

      <hr class="my-6">
      <div class="mt-8">
        <h2 class="text-2xl font-semibold mb-4">Case-Sensitivity Demonstration:</h2>
        <?php 
        # --- 5. Case-Sensitivity Demonstration: ---
        ?>
        <p>
          <strong>APP_NAME:</strong>
          <span class="font-bold text-green-600">
            <?= APP_NAME ?>
          </span>
        </p>
        <p>
          <strong>app_name:</strong> 
          <span class="font-bold text-red-600">
            <?php 
            // Using defined() to safely check if the constant exists
            echo (defined('app_name') ? app_name : 'Not accessible') . "<br>";
            ?>
          </span>
        </p>
        <p class="text-sm text-gray-500 mt-2">
          <!-- PHP version 8.2.0 and later, the Constants Argument #3 ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported. -->
          Note: In modern PHP, constants are always case-sensitive. The older behavior of case-insensitive constants is deprecated.
          <ul class="text-sm text-gray-500 mt-1">
            <li>* PHP 7.3: Defining case-insensitive constants is deprecated.</li>
            <li>* PHP 7: The value parameter can also be an array.</li>
            <li>* PHP 5: The value parameter must be a string, integer, float, boolean or NULL.</li>
          </ul>
        </p>
      </div>

      <div class="mt-8">
        <!--- 6. Global Scope Demonstration: --->
        <h2 class="text-2xl font-semibold mb-3">Testing constant scope in function:</h2>
        <?php
        // This function demonstrates that constants are globally scoped.
        function showGlobalConstantScope(): void {
          echo "<p><strong>APP_NAME inside function:</strong> " . APP_NAME . "</p>";
        }
        showGlobalConstantScope();
        ?>
      </div>
    
      <div class="mt-8">
        <!-- --- 8. Error Handling: --- -->
        <h2 class="text-2xl font-semibold mb-3">Error handling demonstration:</h2>
        <p class="text-sm text-gray-500 mb-1">
          Attempting to redefine a constant results in an error.
        </p>
        <p class="font-bold text-red-600">
          <?php
          /** try... catch... statements will not The try-catch block you've used for a fatal error 
          * will not catch it in this specific way since it is a compile-time error. A more robust 
          * way to handle this to use defined() function.
          */
          if (!defined('APP_NAME')) {
            // Attempt to redefine a constant (this will trigger an error)
            define('APP_NAME', 'NewAppName');
            echo "Constant redefined successfully.";
          } else {
            echo "Error: Constant APP_NAME is already defined.";
          }
          ?>
        </p>
      </div>
      <?php
      # --- 9. Extend the Project (Optional): ---
      // - Add more complex array constants (e.g., multi-dimensional arrays for configuration).
      // - Implement a simple function that uses these constants to "configure" some aspect of an application.
      ?>
    </div>
  </body>
</html>