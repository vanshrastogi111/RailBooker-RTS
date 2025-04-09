# Railway Reservation System

This project is a web-based Railway Reservation System that allows users to view train details, book tickets, and manage their profiles. It includes both user-facing pages and administrative functionalities.

## Project Structure

The project is organized as follows:

```
.
├── add_train.php          # Admin page to add train details
├── index.php              # Homepage
├── login.php              # User login page
├── logout.php             # User logout script
├── profile.php            # User profile page
├── railway.sql            # Database schema
├── tickets.php            # Ticket booking page
├── train-details.php      # Train details page
├── trains.php             # Train listing page
├── assets/                # Static assets (images)
│   ├── default.jpg
│   ├── duronto.jpg
│   ├── express.avif
│   ├── hero.webp
│   ├── shatabdi.jpg
│   └── superfast.jpg
├── css/                   # Stylesheets
│   ├── add_train.css
│   ├── global.css
│   ├── index.css
│   ├── login.css
│   ├── tickets.css
│   ├── train-details.css
│   └── trains.css
├── include/               # PHP includes
│   ├── _add_train.php
│   ├── _login.php
│   ├── _profile.php
│   ├── _tickets.php
│   ├── _train-details.php
│   ├── _trains.php
│   ├── db.php             # Database connection script
│   ├── footer.php         # Footer component
│   └── nav.php            # Navigation bar component
├── script/                # JavaScript files
│   ├── add_train.js
│   ├── global.js
│   ├── login.js
│   ├── train-details.js
│   └── trains.js
```

## Features

- **User Authentication**: Login and logout functionality.
- **Train Listings**: View all available trains.
- **Train Details**: View detailed information about a specific train.
- **Ticket Booking**: Book tickets for available trains.
- **User Profile**: Manage user information.
- **Admin Panel**: Add new train details.

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd railway-reservation-system
   ```

2. Import the database:
   - Open your database management tool (e.g., phpMyAdmin).
   - Create a new database (e.g., `railway`).
   - Import the `railway.sql` file into the database.

3. Configure the database connection:
   - Open `include/db.php`.
   - Update the database credentials:
     ```php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "railway";
     ```

4. Start a local server:
   - Use XAMPP, WAMP, or any PHP server to host the project.
   - Place the project folder in the server's root directory (e.g., `htdocs` for XAMPP).

5. Access the application:
   - Open your browser and navigate to `http://localhost/railway-reservation-system`.

## Usage

- **Homepage**: View the available trains and navigate to other sections.
- **Login**: Log in to access personalized features.
- **Train Details**: Click on a train to view its details.
- **Book Tickets**: Use the ticket booking page to reserve seats.
- **Admin Panel**: Add new trains using the admin interface.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: Apache (via XAMPP/WAMP)

## Screenshots

_Add screenshots of your application here to showcase its features._