<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission API</title>
</head>
<body>
    <h1>Submission API</h1>
    <p>Submission API is a Laravel application that provides an endpoint to submit user data asynchronously and log successful submissions.</p>

    <h2>Setup</h2>
    <ol>
        <li><strong>Clone the repository:</strong></li>
        <pre><code>git clone &lt;repository-url&gt;</code></pre>

        <li><strong>Install dependencies:</strong></li>
        <pre><code>cd submission-api
composer install</code></pre>

        <li><strong>Set up the environment file:</strong></li>
        <p>Duplicate the <code>.env.example</code> file and rename it to <code>.env</code>. Update the database and other configuration settings as needed.</p>

        <li><strong>Generate application key:</strong></li>
        <pre><code>php artisan key:generate</code></pre>

        <li><strong>Run migrations:</strong></li>
        <pre><code>php artisan migrate</code></pre>

        <li><strong>Start the server:</strong></li>
        <pre><code>php artisan serve</code></pre>
        <p>The application will be available at <a href="http://localhost:8000">http://localhost:8000</a>.</p>
    </ol>

    <h2>Testing</h2>
    <p>To run the unit test for the submission API, execute the following command:</p>
    <pre><code>php artisan test</code></pre>

    <p>This will run all tests located in the <code>tests</code> directory, including the <code>SubmissionTest</code>. If you want to run only the <code>SubmissionTest</code>, you can specify the path to the test file:</p>
    <pre><code>php artisan test tests/Feature/SubmissionTest.php</code></pre>
</body>
</html>
