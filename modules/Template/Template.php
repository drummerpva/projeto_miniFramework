<?php
class Template
{
    private function __construct()
    {}
    public static function getInstance()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Template();
        }
        return $inst;
    }

    public function render($tpl, $data = [])
    {
        if (file_exists('templates/' . $tpl . ".php")) {
            require 'templates/' . $tpl . ".php";
        }
    }
}
