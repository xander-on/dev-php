<?php

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Definimos la clase MyApp
class MyApp {
    
    public function getGreeting($name) {
      return "Happy Coding $name !!!";
    }
    
    public function run() {
      $dev_name = $_ENV['DEV_NAME'];
      $greeting = $this->getGreeting($dev_name);
      echo "<h1>$greeting</h1>";
    }
}
?>
