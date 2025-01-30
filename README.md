# E-Mart Website

## Overview

E-Mart Website is an online shopping platform designed to provide a seamless and convenient shopping experience. Built using HTML5, CSS3, PHP, and SQL, it allows users to browse and purchase products effortlessly, while also offering an intuitive interface for administrators to manage the store.

## How It Works

### Admin Features

- **Product Management:** The admin can add new products by entering the product name, price, and image. The product details will then be displayed on the homepage.
- **Modify and Delete Products:** Each product entry includes options to update the price, change the image, or remove the product entirely.
- **View All Products:** The admin can browse all available products, making it easy to manage inventory and make updates.

### User Features

- **Easy Shopping Experience:** Customers can browse all available products, view their images, and see updated prices in real-time.
- **Cart and Checkout:** Users can add products to their cart, compare prices, and proceed to checkout effortlessly.

## Benefits of E-Mart Website

- **Convenience:** Shop from anywhere at any time without the hassle of traveling or dealing with in-store crowds.
- **Variety:** Access a wide range of products from different brands and sellers, often with more options than a physical store.
- **Competitive Pricing:** Compare prices easily and find the best deals without visiting multiple stores.
- **Easy Access to Product Information:** View detailed product descriptions, specifications, and customer reviews to make informed purchases.
- **Time-Saving:** Quickly search for products, compare options, and complete purchases in just a few clicks.
- **No Sales Pressure:** Shop at your own pace without feeling rushed by salespeople.

## Features

### User Features

- View available products with images and prices.
- Add products to the shopping cart.
- Register and log in to manage purchases.

### Admin Features

- Add new products with images and pricing.
- Modify product details such as price and images.
- Delete products from the store.

## Technologies Used
- **Frontend:** HTML5, CSS3
- **Backend:** PHP
- **Database:** SQL
- **Styling:** Google Fonts (Poppins), Custom CSS

## Installation Guide
1. Clone the repository:
   ```sh
   git clone https://github.com/MohamedAmr51/E-Mart-Website.git
   ```
2. Move to the project directory:
   ```sh
   cd E-Mart-Website
   ```
3. Set up a local server (e.g., XAMPP, WAMP, or MAMP) and place the project files in the `htdocs` directory.
4. Import the SQL database (if provided) into your MySQL server.
5. Update the `config.php` file with your database credentials.
6. Start the Apache and MySQL services in your local server.
7. Open a web browser and go to `http://localhost/E-Mart-Website/`

## Project Structure
```
|-- address.php           # Handles user address-related operations
|-- back.php              # Backend logic for processing requests
|-- config.php            # Database connection settings
|-- index.php             # Main entry point of the website
|-- insert.php            # Handles product insertion logic
|-- login.php             # User authentication
|-- register.php          # User registration
|-- style.css             # Styling for the website
|-- PROJECT DESCRIPTION.docx  # Documentation

```

## Contributions
Feel free to contribute to this project by opening issues or submitting pull requests.

## License
This project is for educational purposes and is open for modifications and enhancements.

