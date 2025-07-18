<?php
echo "PHP is working!<br>";
echo "Current time: " . date('Y-m-d H:i:s') . "<br>";
echo "PHP Version: " . phpversion() . "<br>";

echo "<h3>Environment Variables:</h3>";
echo "DB_NAME: " . ($_ENV['DB_NAME'] ?? getenv('DB_NAME') ?? 'NOT SET') . "<br>";
echo "DB_USER: " . ($_ENV['DB_USER'] ?? getenv('DB_USER') ?? 'NOT SET') . "<br>";
echo "DB_PASSWORD: " . (($_ENV['DB_PASSWORD'] ?? getenv('DB_PASSWORD')) ? 'SET' : 'NOT SET') . "<br>";
echo "DB_HOST: " . ($_ENV['DB_HOST'] ?? getenv('DB_HOST') ?? 'NOT SET') . "<br>";
echo "DB_PORT: " . ($_ENV['DB_PORT'] ?? getenv('DB_PORT') ?? 'NOT SET') . "<br>";

echo "<h3>File Check:</h3>";
echo ".env exists: " . (file_exists('.env') ? 'YES' : 'NO') . "<br>";
echo "wp-config.php exists: " . (file_exists('wp-config.php') ? 'YES' : 'NO') . "<br>";

if (file_exists('.env')) {
    echo "<h3>.env contents:</h3>";
    echo "<pre>" . file_get_contents('.env') . "</pre>";
}
?>
