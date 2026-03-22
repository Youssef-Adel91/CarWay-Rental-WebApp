# Car Way - Full-Stack Car Rental Web Application 🚘🌐

## 📌 Project Overview
Car Way is a complete data-driven web application built to manage car rental services. It provides a seamless interface for customers to browse vehicle collections and register for rentals, while offering a robust backend for administrators to manage fleet inventory and user data securely.

## ⚙️ Key Features
* **Role-Based Authentication:** Secure login system differentiating between regular members and system administrators with password hashing.
* **Dynamic Vehicle Management:** Admins can seamlessly add new vehicles to the database (validating license plates) and delete existing ones from the inventory.
* **Customer Relationship Management (CRM):** The system handles comprehensive customer data, allowing for new registrations, data updates (using UUID access keys), and fetching lists of all registered clients.
* **Responsive Frontend UI:** Engaging user interface built with HTML, CSS, and scroll-reveal animations to display the car collection and facilitate effortless booking.

## 🛠️ Tech Stack
* **Frontend:** HTML5, CSS3, JavaScript, jQuery, ScrollReveal.js, FontAwesome.
* **Backend:** PHP (Session Management, API Endpoints, Prepared Statements).
* **Database:** MySQL (Relational Database mapping for Users, Admins, and Vehicles).

## 📂 Repository Structure
* **Frontend Files:**
  * `index.html`: Landing page with call-to-action and layout.
  * `collection.html` / `update.html`: Pages for viewing cars and updating info.
* **Backend Scripts:**
  * `db_connection.php`: Establishes secure PDO connections to the MySQL database.
  * `logins.php`: Handles authentication logic for different user roles.
  * `addCustomer.php` / `update_customer.php` / `customers.php`: Scripts for managing customer profiles and retrieving data.
  * `add_vehicle.php` / `delete_vehicle.php`: Admin scripts for inventory management.

## 🚀 How to Run Locally
1. Clone the repository:
   ```bash
   git clone [https://github.com/Youssef/CarWay-Rental-WebApp.git](https://github.com/Youssef/CarWay-Rental-WebApp.git)
