# PHPiggy

A PHP application for tracking personal expenses. PHPiggy helps you monitor your spending habits, categorize transactions, and manage receipts.

## Features

- User registration and authentication
- Transaction tracking and management
- Receipt uploads and storage
- Responsive design

## Requirements

- PHP 8.0 or higher
- MySQL/MariaDB
- Composer
- Web server (Apache/Nginx)

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/klajdm/phpiggy.git
   cd phpiggy
   ```

2. Install dependencies:

   ```bash
   composer install
   ```

3. Set up your environment variables by creating a `.env` file:

   ```
   DB_HOST=localhost
   DB_NAME=phpiggy
   DB_USER=your_db_user
   DB_PASS=your_db_password
   ```

4. Import database schema:

   ```bash
   mysql -u your_db_user -p your_db_name < database.sql
   ```

5. Configure your web server to point to the `public` directory.

## Usage

Access the application through your web browser at `http://localhost/phpiggy/public` (adjust according to your web server configuration).

## Development

To run the CLI command:

```bash
composer phpiggy
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
