# proyectoDibujosPHP
DibujoList App  Symfony.

Descripción
Este proyecto es una aplicación web realizada con Symfony como parte de una práctica del módulo de PHP en el bootcamp [nombre_del_bootcamp]. El objetivo es mostrar, insertar y detallar dibujos en una lista. Los dibujos tienen un nombre, una imagen y un nivel de dificultad.

Tecnologías Utilizadas
- PHP
- Symfony
- Doctrine
- Twig
- MySQL

Características
- Mostrar una lista de dibujos
- Visualizar detalles de cada dibujo
- Insertar nuevos dibujos a través de un formulario

Entidades
La entidad principal es Drawing, que tiene los siguientes atributos:

id: Identificador único
nombre: Nombre del dibujo
imagen: URL de la imagen del dibujo
dificultad: Nivel de dificultad del dibujo

Rutas
Las principales rutas de la aplicación son:

/: Inicio
/drawingList: Lista de dibujos
/drawingDetail/{id}: Detalle de un dibujo
/new/drawing: Insertar dibujos de muestra
/insertDrawing: Insertar un nuevo dibujo mediante un formulario

Cómo correr el proyecto
1. Clonar el repositorio
2. Instalar las dependencias con Composer
3. Configurar la base de datos en el archivo .env
4. Ejecutar las migraciones
5. Correr el servidor de desarrollo

git clone <url_del_repositorio>
cd <nombre_del_directorio>
composer install
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
php bin/console server:run

Visitar http://127.0.0.1:8000 en el navegador.
