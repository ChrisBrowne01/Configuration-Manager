# Activity 6: PHP Constants - Configuration Manager

**Project Description:**

This mini-project is designed to help students apply their knowledge of PHP constants in a practical scenario. The objective is to create a simple configuration manager that demonstrates various aspects of PHP constants, including defining constants, using array constants, accessing constants in different scopes, and understanding case-sensitivity issues.

**Instructions:**

1. Create a New File:

    - Create a new file named config_manager.php.
    - This file will contain the main script for your configuration manager.

2. Define Basic Constants:

    - Create constants for database configuration (host, username, password, database name).
    - Define constants for application information (name, version, debug mode).
    - Use appropriate naming conventions for constants (typically uppercase with underscores).

3. Define an Array Constant:

    - Create an array constant to store supported languages for the application.
    - Use the define() function to create this array constant.

4. Create Display Functions:

    - Implement a function to display database configuration.
    - Create a function to show application information.
Write a function to list supported languages.

5. Demonstrate Constant Usage:

    - In the main execution area, call the display functions to show how constants are accessed.
    - Demonstrate accessing array constant values.

6. Case-Sensitivity Demonstration:

    - Attempt to access a constant using different cases (e.g., APP_NAME vs app_name).
    - Comment on the behavior observed and how it might differ in different PHP versions.

7. Global Scope Demonstration:

    - Create a function that accesses constants defined outside of its scope.
    - Demonstrate that constants are accessible within this function without using the global keyword.

8. Error Handling:

    - Attempt to redefine an existing constant.
    - Implement try-catch block to handle the error that occurs when trying to redefine a constant.

9. Add Comments:

    - Use single-line and multi-line comments to explain the purpose of different sections of your code.
    - Comment on version-specific behaviors, if any.

10. Test Your Script:

    - Run your PHP script and verify that all sections work as expected.
    - Test with different PHP versions if possible, noting any differences in behavior.

11. Extend the Project (Optional):

    - Add more complex array constants (e.g., multi-dimensional arrays for configuration).
    - Implement a simple function that uses these constants to "configure" some aspect of an application.

Example Output:

PHP Constants - Configuration Manager

```PHP
Database Configuration:
Host: localhost
User: root
Database: myapp_db

App Information:
Name: MyPHPApp
Version: 1.0.0
Debug Mode: Enabled

Supported Languages:
en: English
es: Spanish
fr: French

Case-insensitivity demonstration:
APP_NAME: MyPHPApp
app_name: Not accessible

Testing constant scope in function:
APP_NAME inside function: MyPHPApp

Error handling demonstration:
Error: Constant APP_NAME already defined```
GitHub Example

By completing this mini-project, students will demonstrate their understanding of PHP constants, including their definition, usage in different contexts, scope, and potential pitfalls. They will create a practical application that showcases these concepts and prepares them for more advanced PHP programming tasks. Additionally, they will gain experience in creating and managing configuration-like structures using constants, which is a common practice in many PHP applications.
