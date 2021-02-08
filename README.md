# Getting started

## Installation
Clone the repository

    git clone https://github.com/balkisys/laravel-api-todolist-test.git

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate



Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve




The api can be accessed at [http://localhost:8000/api](http://localhost:8000/api).

## API Specification

This application adheres to the api specifications set by the [Thinkster](https://github.com/gothinkster) team. This helps mix and match any backend with any other frontend without conflicts.

> [Full API Spec](https://github.com/gothinkster/realworld/tree/master/api)





# Testing API

Run the laravel development server

    php artisan serve

GET : api/todolists : todolists.index   | App\Http\Controllers\TodoListController@index  
POST : api/todolists :  todolists.store |App\Http\Controllers\TodoListController@store
GET : api/todolists/{todolist} : todolists.show : App\Http\Controllers\TodoListController@show
PUT :  api/todolists/{todolist} : todolists.update  : App\Http\Controllers\TodoListController@update
DELETE  : api/todolists/{todolist} : todolists.destroy  : App\Http\Controllers\TodoListController@destroy
