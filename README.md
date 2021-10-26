# Utilizando Kint en PHP

Este es un pequeño ejemplo para poder probar y aprender a utilizar la librería Kint en tus proyectos PHP.

Repositorio del video del canal: https://youtu.be/HHyH5C44h2o

## Instalación

Para poder utilizar este repositorio primero tendrás que hacer lo siguiente:

Clonar el repositorio:

```git clone https://github.com/acensito/pruebakint.git```

Una vez clonado, tendrás que importar la base de datos ```productos.sql```

Posteriormente, tendrás que descargarte la librería kint.phar:
 - [De su repositorio.](https://github.com/kint-php/kint)
 - [De su web oficial.](https://kint-php.github.io/kint/)

 E incluirla en el repositorio (en la carpeta /inc por ejemplo, pero puedes colocarla libremente donde creas conveniente), eso si tendrás que incluir la libreria al inicio de tu código php:
 
 ```<?php include 'ruta_del_archivo/kint.php'; ?>``` 
 
Para poder utilizarlo, mediante el metodo correspondiente podrás mostrar los datos en pantalla:

```<?php d($variable); ?>```
