<?
    function makeAuth() {
        return[
            "localhost",
            "miowebte_testdbc",
            "PeeWee1987#",
            "miowebte_wnm608"

        ];

    }

    function makePDOAuth() {
        return[
            "mysql:host=localhost;dbname=miowebte_wnm608",
            "miowebte_testdbc",
            "PeeWee1987#",
            [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
        ];
    }

?>