
---

## Servicio de Directorio LDAP

El proyecto utiliza un servicio de directorio **OpenLDAP** para la gestión centralizada de usuarios.

### Dominio LDAP
- **Base DN**: `dc=devwebpro,dc=local`
- **Administrador**: `cn=admin,dc=devwebpro,dc=local`

### Unidades Organizativas
- `ou=developers`
- `ou=designers`
- `ou=managers`

Los usuarios se organizan en estas unidades según su rol dentro de la empresa.

---

## Integración LDAP con la aplicación web

La aplicación web incluye un ejemplo **conceptual** de integración con LDAP para la autenticación de usuarios.

El proceso de autenticación consiste en:

1. Conectarse al servidor LDAP mediante `ldap_connect`
2. Definir el DN base del directorio (`dc=devwebpro,dc=local`)
3. Construir el DN del usuario a partir de su identificador (uid)
4. Realizar un `bind` LDAP utilizando las credenciales del usuario
5. Validar si la autenticación es correcta o no

Este enfoque permite centralizar la gestión de usuarios y credenciales mediante un servicio de directorio.

> **Nota**: La integración es demostrativa y no es necesario que funcione en un entorno real.

---

## Control de versiones con Git y GitHub

El proyecto se gestiona mediante **Git** y **GitHub**, utilizando un flujo de trabajo basado en ramas.

### Ramas
- `main`: rama de producción
- `desarrollo`: rama de desarrollo

El desarrollo se realiza en la rama `desarrollo`, y una vez finalizado se realiza un merge a `main`.

### Issues y Project Board
Se han utilizado:
- Issues para simular nuevas funcionalidades, bugs y mejoras de documentación
- Un Project Board con las columnas:
  - To Do
  - In Progress
  - Done

Al menos un Issue ha sido cerrado automáticamente mediante un commit referenciado.

---

## Documentación técnica

El código PHP del proyecto está documentado utilizando **DocBlock** y se ha generado documentación automática en formato HTML mediante **PHPDocumentor**.

La documentación generada se encuentra en la carpeta:


---

## Seguridad en LDAP

Se han definido políticas de contraseñas seguras en OpenLDAP, incluyendo:

- Longitud mínima de contraseña
- Historial de contraseñas
- Bloqueo de cuenta tras múltiples intentos fallidos
- Expiración de contraseñas
- Obligación de cambio de contraseña

Estas medidas permiten mejorar la seguridad del sistema y evitar accesos no autorizados.

---

## Buenas prácticas de seguridad

Durante el desarrollo del proyecto se han aplicado las siguientes buenas prácticas:

- No subir credenciales ni información sensible al repositorio
- Uso de archivo `.gitignore` para excluir datos sensibles
- Autenticación centralizada mediante LDAP
- Uso de claves SSH para la autenticación con GitHub
- Separación entre entorno de desarrollo y producción

---

## Autor

**Jesús García**  
Proyecto académico – Desarrollo de Aplicaciones Web (DAW)

