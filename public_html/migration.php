<?php
require_once "db.php";

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Capsule\Manager as Capsule;


Capsule::schema()->dropIfExists('products');
Capsule::schema()->dropIfExists('categories');


// Таблица категорий
Capsule::schema()->create('categories', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 100);  // название категории
});

// Таблица товаров
Capsule::schema()->create('products', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name', 100); // название товара
    $table->decimal('price', 15, 2)->default(0); // цена
    $table->string('description', 700); // описание товара
    $table->integer('category_id')->unsigned();
    // Внешний ключ
    $table->foreign('category_id')->references('id')->on('categories');
});

echo 'Таблицы созданы';