<?php 
    define('INCLUDE_PATH_FULL', 'http://localhost/mvc-project/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost/mvc-project/');

    // define('INCLUDE_PATH_FULL', 'http://192.168.0.104/mvc-project/Views/pages/');
    // define('INCLUDE_PATH', 'http://192.168.0.104/mvc-project/');

    class Application {
        private string $url;

        public function __construct() {
            $this->url = "";
        }
        public function execute() {
            if(isset($_GET['url'])) {
                $this->url = explode('/', $_GET['url'])[0];
            }
            if(!strlen($this->url)) {
                $this->url = 'Home';
            }

            $this->url = ucfirst($this->url);
            $this->url .= 'Controller';

            $className = 'Controllers\\'.$this->url;
            $controller = new $className();
            $controller->execute();
        }
    }

?>