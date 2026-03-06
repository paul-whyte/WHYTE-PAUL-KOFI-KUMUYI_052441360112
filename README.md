# WHYTE-PAUL-KOFI-KUMUYI_052441360112
QuickBite Food Ordering SystemProject 2 – QuickBite


GROUP MEMBERS         AND                  INDEX NUMBER:
WINFRED ASANTE                            052441360056, 
WHYTE PAUL KOFI KUMUYI                    052441360112,
MARY GYEDU ABOAGYEWAA                     052441360125,
MAXWELL AGYEI BOAKYE                      052441360110,
FRIMPONG BEATRICE                         052441360231,
NATHAN NSUE ROKA                          052441360394.

Project Title

QuickBite – A simple and interactive food ordering system designed to streamline ordering processes for users.

Project Overview

QuickBite allows users to register, log in, view available food items, and place orders seamlessly. The system incorporates a clean and responsive interface using an external CSS stylesheet to enhance user experience. The project demonstrates core concepts of web development, including session management, form handling, and basic frontend-backend integration with PHP.

Features Implemented

User Registration and Login: Securely create and authenticate user accounts.

Dashboard: Displays available food items dynamically.

Order Placement: Users can select and order food items efficiently.

Logout Functionality: Ensures secure session termination.

External CSS Styling: Provides a consistent and user-friendly interface across all pages.

Challenges Encountered

Session Management: Ensuring login sessions are handled securely and logout works reliably.

Dynamic Content Display: Reflecting available food items on the dashboard dynamically.

UI Consistency: Integrating external CSS for a uniform and visually appealing interface.

How to Run

Import the project folder into your local server (e.g., XAMPP).

Open index.php in a browser to start the application.

Use the registration page to create a new account or log in with existing credentials.



PROJECT DESCRIPTION

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






