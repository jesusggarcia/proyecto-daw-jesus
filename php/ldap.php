<?php
/**
 * Integración LDAP con la aplicación web
 *
 * Este archivo demuestra de forma conceptual cómo una aplicación
 * web podría autenticarse contra un servidor LDAP.
 * No es necesario que la autenticación funcione realmente.
 *
 * @author Jesus Garcia
 * @version 1.0
 */

$ldap_host = "ldap://localhost";
$ldap_base_dn = "dc=devwebpro,dc=local";

// Credenciales simuladas (introducidas por el usuario)
$usuario = "jgarcia";
$password = "password123";

// Conexión al servidor LDAP
$ldap_conn = ldap_connect($ldap_host);

if (!$ldap_conn) {
    die("No se pudo conectar al servidor LDAP");
}

// Opciones LDAP
ldap_set_option($ldap_conn, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap_conn, LDAP_OPT_REFERRALS, 0);

// DN del usuario
$ldap_user_dn = "uid=$usuario,ou=developers,$ldap_base_dn";

// Intento de autenticación
$bind = @ldap_bind($ldap_conn, $ldap_user_dn, $password);

if ($bind) {
    echo "Usuario autenticado correctamente mediante LDAP";
} else {
    echo "Error de autenticación LDAP";
}

ldap_unbind($ldap_conn);
?>

