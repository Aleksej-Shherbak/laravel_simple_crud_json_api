<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Простое CRUD приложение на Laravel

Это приложение реализует простой REST API. 

- get <app_domain>/api/articles - вернет все записи;
- get <app_domain>/api/article/{id} - вернет конкретную запись;
- post <app_domain>/api/article - сохраняет новую запись;
- put  <app_domain>/api/article - обновляет запись (необходимо указать article_id);
- delete <app_domain>/api/article/{id} - удаляет конкретную запись;

## Установка

Необходимо создать следующую структуру папок <app_name>/public. Далее, развернуть сайт при помощи
[lampi](https://github.com/neurobin/lampi), указав путь <app_name>/public в качестве корневой директории
проекта. После того, как lampi выполнит установку, необходимо удалить папку public в директоии вашего проекта.
Далее в директорию проекта клонируется репозиторий при помощи 


<i>$ git clone <адрес репозитория></i>

Далее нужно обновить схему автозагрузки классов. Один из вариантов это сделать, ввести следующую команду:

<i>$ composer update</i>

При этом, composer должен быть заранее установлен.

После, создайте mysql базу данных, скопируйте .env.example файл переименовав его в .env и укажите в нем
соответствующие настройки базы данных.

Далее необходимо выполнить миграции и сидинг данных. Делается  это следующими командами:

<i>$ php artisan migrate </i>
<i>$ php artisan db:seed </i>

Все, можно работать :)

## Лицензия

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
