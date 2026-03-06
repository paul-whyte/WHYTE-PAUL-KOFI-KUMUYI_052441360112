# WHYTE-PAUL-KOFI-KUMUYI_052441360112
QuickBite Food Ordering System
Project Description

QuickBite is a simple web-based food ordering interface built using PHP, HTML, and CSS.
The system demonstrates a basic user authentication flow including registration, login, dashboard access, and logout without using a database.

It is mainly designed for learning purposes to demonstrate how session-based authentication works in PHP.

Features

User registration page

User login system

Session-based authentication

Protected dashboard page

Logout functionality

Responsive interface using CSS

Technologies Used

HTML5 – for page structure

CSS3 – for styling and layout

PHP – for backend authentication logic

PHP Sessions – to maintain login state

Project Structure
project 2/
│
├── index.html        # Homepage of the QuickBite system
├── login.php         # Login page and authentication logic
├── register.php      # User registration page
├── dashboard.php     # Protected dashboard page (only accessible after login)
├── logout.php        # Logs the user out and destroys the session
└── style.css         # Stylesheet used by all pages
How the System Works
1. Home Page

The index.html page introduces the QuickBite food ordering platform and provides navigation links to login, register, and dashboard pages.

2. Registration

Users enter their name, email, and password on the registration page.
After successful registration, the system creates a session and redirects the user to the dashboard.

3. Login

The login page checks the entered credentials against a dummy login:

Email: user@example.com
Password: 123456

If correct, a session is created and the user is redirected to the dashboard.

4. Dashboard

The dashboard is a protected page that only logged-in users can access.
If a user tries to access it without logging in, they are redirected to the login page.

5. Logout

The logout script destroys the session and redirects the user back to the home page.

How to Run the Project

Install a local server such as:

XAMPP

WAMP

MAMP

Place the project folder inside the htdocs directory.

Example:

xampp/htdocs/project2/

Start Apache from the control panel.

http://localhost/project2/index.html
Limitations

No database integration

User credentials are hardcoded

No password encryption
<img width="1920" height="1008" alt="Screenshot 2026-03-06 105221" src="https://github.com/user-attachments/assets/a25ae290-7cd9-4de7-85fe-a711f500605b" />

<img width="1920" height="1008" alt="Screenshot 2026-03-06 105318" src="https://github.com/user-attachments/assets/86f31688-54bb-4236-b9c8-e9b9b9a47158" />

<img width="1920" height="1008" alt="Screenshot 2026-03-06 105400" src="https://github.com/user-attachments/assets/4fb61fed-b171-42cf-905a-1e85fa803794" />
<img width="1920" height="1008" alt="Screenshot 2026-03-06 105346" src="https://github.com/user-attachments/assets/5012c98b-6af1-4c6a-9987-d31457605b0c" />
