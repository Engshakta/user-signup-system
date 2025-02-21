User Signup System
A simple and secure web application that allows users to sign up by providing their first name, last name, and email address. This project demonstrates a full-stack approach to handling user input, saving data to a MySQL database, and managing frontend and backend interactions.

Features
User sign-up with fields: First Name, Last Name, and Email
Data is securely stored in a MySQL database
Success message upon successful submission
Simple form with real-time feedback
Tech Stack
Frontend: HTML, CSS, JavaScript
Backend: PHP
Database: MySQL
Prerequisites
Before you begin, ensure that you have the following installed on your machine:

PHP
MySQL (or XAMPP/WAMP for local development)
A browser to test the application
Installation
1. Clone the repository:
bash
Copy
Edit
git clone https://github.com/Engshakta/user-signup-system.git
2. Navigate to the project directory:
bash
Copy
Edit
cd user-signup-system
3. Set up your local server (XAMPP or WAMP):
Place the user-signup-system folder in the htdocs (XAMPP) or www (WAMP) directory.
Start Apache and MySQL through the XAMPP/WAMP control panel.
4. Create the database:
Open phpMyAdmin (usually at http://localhost/phpmyadmin).
Create a database named users_db.
Run the SQL script below to create the table:
sql
Copy
Edit
CREATE TABLE IF NOT EXISTS users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
);
5. Update databaseConnection.php:
Make sure your databaseConnection.php file is configured to use the correct database credentials.

Usage
Open your browser and go to http://localhost/user-signup-system/.
Fill in the form with your first name, last name, and email.
Click Submit.
The form will send data to the backend, store it in the MySQL database, and display a success message.
Contributing
We welcome contributions! If you find a bug or want to improve the application, feel free to open an issue or submit a pull request.

License
This project is licensed under the MIT License - see the LICENSE file for details.

Contact
If you have any questions or suggestions, feel free to reach out:

GitHub: @Engshakta
Email: [your-email@example.com]
Next Steps:
Create the README: Copy the content above into a file named README.md in your project root.
Push the changes to GitHub:
bash
Copy
Edit
git add README.md
git commit -m "Added professional README file"
git push
