# Submission API

Submission API is a Laravel application that provides an endpoint to submit user data asynchronously and log successful submissions.

## Setup

1. **Clone the repository:**
    ```bash
    git clone <repository-url>
    ```

2. **Install dependencies:**
    ```bash
    cd submission-api
    composer install
    ```

3. **Set up the environment file:**
   Duplicate the `.env.example` file and rename it to `.env`. Update the database and other configuration settings as needed.

4. **Generate application key:**
    ```bash
    php artisan key:generate
    ```

5. **Run migrations:**
    ```bash
    php artisan migrate
    ```

6. **Start the server:**
    ```bash
    php artisan serve
    ```
    The application will be available at [http://localhost:8000](http://localhost:8000).

## Testing

To run the unit test for the submission API, execute the following command:
```bash
php artisan test tests/Feature/SubmissionTest.php