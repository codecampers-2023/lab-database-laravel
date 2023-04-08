# lab-database

## Travail à faire 

- Dépôt git 
  - Création du projet laravel vide
  - Création de la base de données de prototype 
  - Création de sedders par ordre 
    - Members
    - Projects
    - Tasks
- Présentation
  - Eloquent ORM relationship
    - One-to-one
    - One-to-many

## Création du projet laravel vide 

````shell
composer create-project laravel/laravel lab-seeders
````
## Création de la base de données 

Création des tables 


- Projects
- Tasks
- Members

````shell
php artisan make:migration create_projects_table 
php artisan make:migration create_tasks_table 
php artisan migrate
php artisan make:model Project
php artisan make:model Task

php artisan make:controller ProjectController
php artisan make:controller TaskController

php artisan make:migration create_members_table 
php artisan make:migration create_member_task_table
php artisan migrate
php artisan make:model Member
````

### Références 
- https://dev.to/carlos0318/eloquent-orm-relationship-part-1-2h2b
- https://dev.to/dalelantowork/laravel-eloquent-relationships-advanced-notes-2bg2
- https://dev.to/dalelantowork/laravel-8-eloquent-relationships-tutorial-one-to-many-relationship-58j2
- https://dev.to/dalelantowork/laravel-8-eloquent-relationships-tutorial-many-to-many-relationship-15a2

## Titre

````shell
````


## Commandes 

````shell
php artisan make:seeder UserSeeder
````

## Références 
- https://laravel.com/docs/10.x/eloquent-relationships
- https://laravel.com/docs/10.x/seeding