<?php

/**
 * A l'aide de la documentation officielle de PHP.
 * 1. Retrouvez la page traitant des superglobales pour $_SERVER
 * 2. Récupérez un maximum de valeurs de ce tableau et affichez les à l'aide d'un simple echo ( il n'est pas interdit d'être intelligent, c'est un tableau associatif... )
 * 3. Uploadez ce projet sur votre serveur et testez !
 */
// TODO Votre code ici

$server = [
    $_SERVER['GATEWAY_INTERFACE'],
    $_SERVER['SERVER_ADDR'],
    $_SERVER['SERVER_NAME'],
    $_SERVER['SERVER_SOFTWARE'],
    $_SERVER['SERVER_PROTOCOL'],
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_TIME'],
    $_SERVER['REQUEST_TIME_FLOAT'],
    $_SERVER['QUERY_STRING'],
    $_SERVER['DOCUMENT_ROOT'],
    $_SERVER['HTTP_ACCEPT'],
    $_SERVER['HTTP_ACCEPT_CHARSET'],
    $_SERVER['HTTP_ACCEPT_ENCODING'],
    $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    $_SERVER['HTTP_CONNECTION'],
    $_SERVER['HTTP_HOST'],
    $_SERVER['HTTP_REFERER'],
    $_SERVER['HTTP_USER_AGENT'],
    $_SERVER['HTTPS'],
    $_SERVER['REMOTE_ADDR'],
    $_SERVER['REMOTE_HOST'],
    $_SERVER['REMOTE_PORT'],
    $_SERVER['REMOTE_USER'],
    $_SERVER['REDIRECT_REMOTE_USER'],
    $_SERVER['SCRIPT_FILENAME'],
    $_SERVER['SERVER_ADMIN'],
    $_SERVER['SERVER_PORT'],
    $_SERVER['SERVER_SIGNATURE'],
    $_SERVER['PATH_TRANSLATED'],
    $_SERVER['SCRIPT_NAME'],
    $_SERVER['REQUEST_URI'],
    $_SERVER['PHP_AUTH_DIGEST'],
    $_SERVER['PHP_AUTH_USER'],
    $_SERVER['PHP_AUTH_PW'],
    $_SERVER['AUTH_TYPE'],
    $_SERVER['PATH_INFO'],
    $_SERVER['ORIG_PATH_INFO'],
];

$count = count($server);
for ($i = 0; $i < $server; $i++){
    echo $server[$i];
}