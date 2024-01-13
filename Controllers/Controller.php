<?php 
    namespace Controllers;

    abstract class Controller {
        private $model;
        private $view;

        public function execute(): void { }
    }
?>