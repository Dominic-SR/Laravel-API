<h1>LARAVEL API</h1>

<p><b>Create Project</b> - composer create-project laravel/laravel Laravel-API</p>

<strong>LARAVEL RESOURCE API CRUD</strong>
create migration -> php artisan make:migration create_posts_table 
run migration -> php artisan migrate 
create model -> php artisan make:model Post
create controller(--resurce => with template) -> php artisan make:controller PostController --resource

<strong>LARAVEL MANUAL API CRUD</strong>
create model -> php artisan make:model books -m (-m means also create migration files)
run migration -> php artisan migrate
create controller -> php artisan make:controller BookController


