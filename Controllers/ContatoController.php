<?php 
    namespace Controllers;

    class ContatoController extends Controller {
        public function __construct() {
            $this->view = new \Views\MainView('contato');
        }
        public function execute(): void {
            $this->view->render(['titulo'=>'contato']);
        }
    }

?>