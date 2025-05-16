# PHP Blog Application with Search and Pagination

This is a simple PHP-based blog-style application that allows users to view, search, and navigate through posts using pagination. It includes a user-friendly interface styled with Bootstrap for responsive design.

## Features

- 🔍 **Search**: Search posts by title or content using a search input form.
- 📄 **Pagination**: View a limited number of posts per page with navigation controls.
- 💅 **Responsive UI**: Styled with [Bootstrap 5](https://getbootstrap.com/) for clean and mobile-friendly design.

## Requirements

- PHP 7.0 or higher
- MySQL database
- Web server (Apache, Nginx, etc.)
- Composer (optional, if you extend functionality)

## Setup Instructions

1. **Clone or Download this Repository**

2. **Create the Database**
   ```sql
   CREATE DATABASE your_db;
   USE your_db;

   CREATE TABLE posts (
     id INT AUTO_INCREMENT PRIMARY KEY,
     title VARCHAR(255) NOT NULL,
     content TEXT NOT NULL,
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
   );
