## Integración LDAP con la aplicación web

La aplicación web incluye un ejemplo de integración con un servidor LDAP
para la autenticación de usuarios.

El proceso de autenticación consiste en:

1. Conectarse al servidor LDAP mediante `ldap_connect`
2. Definir el DN base del directorio (`dc=devwebpro,dc=local`)
3. Construir el DN del usuario a partir de su identificador (uid)
4. Realizar un `bind` LDAP con las credenciales del usuario
5. Validar si la autenticación es correcta

Este enfoque permite centralizar la gestión de usuarios y credenciales
mediante un servicio de directorio.

