<?php

/*
    Defines do Sistema
*/
define("DOMINIO_NOME", $_SERVER["SERVER_NAME"]);
define("CAMINHO_COMPLETO", $_SERVER["HTTP_REFERER"]);

/*
    MYSQLI CONNECTION CONFIG
*/
if(DOMINIO_NOME == "localhost" || DOMINIO_NOME == "127.0.0.1") {
    define("mysql_host", "localhost");
    define("mysql_user", "root");
    define("mysql_pass", "root");
    define("mysql_database", "gabriel_gabrielweb7");
} else {
    /*  Online Server */
    define("mysql_host", "localhost");
    define("mysql_user", "pirop630_web7");
    define("mysql_pass", "senhaweb7");
    define("mysql_database", "pirop630_gabrielweb7");

}