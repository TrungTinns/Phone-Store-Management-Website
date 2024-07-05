# Phone Store Management Website

## Project Overview

This project is a comprehensive web application for managing a phone store, developed by a team of Computer Science students from Ton Duc Thang University. The website aims to provide an efficient and user-friendly platform for both customers and administrators to interact with the phone store's inventory and services.

## Team Members

- Mai The Gia Bao - 520H0513
- Huynh Van De - 520H0036  
- Nguyen Chanh Tin - 520H0587
- Nguyen Trung Tin - 520H0589

## Project Objectives

1. Develop a fully functional e-commerce website for a phone store
2. Create an attractive and intuitive user interface
3. Implement secure user authentication and authorization
4. Provide online payment integration
5. Offer comprehensive product management for administrators
6. Ensure responsive design for various devices and screen sizes

## Technologies Used
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/040e22b4-1e84-4f40-a1a2-32fbe5cc2189)
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/8e97164d-3439-495e-a7b4-39bcded5f383)

### Frontend
- HTML5
- CSS3
- JavaScript
- Bootstrap 5
- React.js (for dynamic components)

### Backend
- PHP 8.0+
- Laravel Framework 8.x
- RESTful API architecture

### Database
- MySQL 8.0

### Additional Tools and Libraries
- Git for version control
- Composer for PHP dependency management
- npm for JavaScript package management
- PHPUnit for backend testing
- Jest for frontend testing

## Key Features
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/3dc7e14c-5e64-44d5-ab72-207b9ce81de3)
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/5235b5a8-5015-4bf9-9186-c0e1dd07dc3d)
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/017465f0-c943-4453-b29e-ea43f970b0bf)
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/eaff2e2c-8384-4d5a-aefc-85d39e1b7599)
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/08a12d9d-dfd1-40e9-a9c9-a4b7d59b5507)
![image](https://github.com/TrungTinns/Phone-Store-Management-Website/assets/94519308/b7eda4ee-e88e-4ed1-b630-d76b75e1d6d5)

### For Customers
1. Product browsing with advanced filtering and search capabilities
2. User registration and authentication
3. Shopping cart functionality
4. Secure checkout process
5. Order tracking
6. User profile management
7. Product reviews and ratings

### For Administrators
1. Dashboard with sales analytics and reports
2. Product management (CRUD operations)
3. User management
4. Order management
5. Inventory tracking
6. Discount and promotion management

## Installation and Setup

1. Clone the repository:
git clone https://github.com/your-username/phone-store-management.git
Copy
2. Navigate to the project directory:
cd phone-store-management
Copy
3. Install PHP dependencies:
composer install
Copy
4. Install JavaScript dependencies:
npm install
Copy
5. Create a copy of the `.env.example` file and rename it to `.env`. Update the database and other configuration settings.

6. Generate an application key:
php artisan key:generate
Copy
7. Run database migrations and seed the database:
php artisan migrate --seed
Copy
8. Compile assets:
npm run dev
Copy
9. Start the development server:
php artisan serve
Copy
10. Access the application at `http://localhost:8000`

## Testing

- Run PHP tests:
php artisan test
Copy
- Run JavaScript tests:
npm run test
Copy
## Deployment

For production deployment, please follow these additional steps:

1. Configure your web server (Apache/Nginx) to point to the `public` directory
2. Set up SSL for secure HTTPS connections
3. Optimize autoloader:
composer install --optimize-autoloader --no-dev
Copy4. Compile and minify assets for production:
npm run production
Copy
## Contributing

We welcome contributions to improve the project. Please follow these steps:

1. Fork the repository
2. Create a new branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.


