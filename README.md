LARAVEL PROJECT SETUP

create project ->  composer create-project laravel/laravel Laravel-API

LARAVEL RESOURCE API CRUD
create migration -> php artisan make:migration create_posts_table 
run migration -> php artisan migrate 
create model -> php artisan make:model Post
create controller(--resurce => with template) -> php artisan make:controller PostController --resource

LARAVEL MANUAL API CRUD
create model -> php artisan make:model books -m (-m means also create migration files)
run migration -> php artisan migrate
create controller -> php artisan make:controller BookController


