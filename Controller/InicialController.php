<?php
    namespace Aula_Tiago_Web\Controller;

    final class InicialController extends Controller
    {
        public static function index() : void
        {
            parent::isProtected();

            include VIEWS . '/Inicial/home.php';
        }
    }
?>