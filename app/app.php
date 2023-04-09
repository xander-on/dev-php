<?php

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

// Definimos la clase MyApp
class MyApp {
    
    public function getGreeting($name) {
      return "Happy Coding $name !!!";
    }
    
    public function run() {
      // $name = 'Alexander';
      $dev = $_ENV['DEV_NAME'];

      
      // Obtenemos el saludo personalizado
      $greeting = $this->getGreeting($name);
      
      // Renderizamos la página de inicio
      // require_once 'views/home.php';

      echo "<h1>$greeting</h1>";
    }
}
?>
