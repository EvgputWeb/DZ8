<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            padding: 0 15px;
        }
        h3 {
            margin: 15px 0 5px 0;
        }
        span {
            font-weight: bold;
        }
    </style>

</head>
<body>

    <h1>КАТЕГОРИИ:</h1>
    <hr>

    <h3>GET</h3>
    <form id="get-category-form" method="post">
        <input type="hidden" name="_method" value="GET">
        id: <input type="text" name="id" id="get-category-id"><br><br>
        <input type="submit" value="GET Category">
    </form>
    <br>
    <div>
        GET Result: <span id="get-category-response"></span>
    </div>

    <hr>
    <h3>POST</h3>
    <form id="post-category-form" method="post">
        <input type="hidden" name="_method" value="POST">
        name: <input type="text" name="name" id="post-category-name"><br><br>
        <input type="submit" value="POST Category">
    </form>
    <br>
    <div>
        POST Result: <span id="post-category-response"></span>
    </div>

    <hr>
    <h3>PATCH</h3>
    <form id="patch-category-form" method="post">
        <input type="hidden" name="_method" value="PATCH">
        id:
        <input type="text" name="id" id="patch-category-id"> &nbsp;
        name:
        <input type="text" name="name" id="patch-category-name"><br><br>
        <input type="submit" value="PATCH Category">
    </form>
    <br>
    <div>
        PATCH Result: <span id="patch-category-response"></span>
    </div>

    <hr>
    <h3>DELETE</h3>
    <form id="delete-category-form" method="post">
        <input type="hidden" name="_method" value="DELETE">
        id: <input type="text" name="id" id="delete-category-id"><br><br>
        <input type="submit" value="DELETE Category">
    </form>
    <br>
    <div>
        DELETE Result: <span id="delete-category-response"></span>
    </div>

    <hr>
    <hr>
    <hr>

    <br>

    <h1>ТОВАРЫ:</h1>
    <hr>

    <h3>GET</h3>
    <form id="get-product-form" method="post">
        <input type="hidden" name="_method" value="GET">
        id: <input type="text" name="id" id="get-product-id"><br><br>
        <input type="submit" value="GET product">
    </form>
    <br>
    <div>
        GET Result: <span id="get-product-response"></span>
    </div>

    <hr>
    <h3>POST</h3>
    <form id="post-product-form" method="post">
        <input type="hidden" name="_method" value="POST">
        name: <input type="text" name="name" id="post-product-name">  &nbsp;
        price: <input type="text" name="name" id="post-product-price">  &nbsp;
        description: <input type="text" name="name" id="post-product-description">  &nbsp;
        category_id: <input type="text" name="name" id="post-product-category_id"><br><br>
        <input type="submit" value="POST product">
    </form>
    <br>
    <div>
        POST Result: <span id="post-product-response"></span>
    </div>

    <hr>
    <h3>PATCH</h3>
    <form id="patch-product-form" method="post">
        <input type="hidden" name="_method" value="PATCH">
        id: <input type="text" name="id" id="patch-product-id"> &nbsp;
        name: <input type="text" name="name" id="patch-product-name">  &nbsp;
        price: <input type="text" name="name" id="patch-product-price">  &nbsp;
        description: <input type="text" name="name" id="patch-product-description">  &nbsp;
        category_id: <input type="text" name="name" id="patch-product-category_id"><br><br>
        <input type="submit" value="PATCH product">
    </form>
    <br>
    <div>
        PATCH Result: <span id="patch-product-response"></span>
    </div>

    <hr>
    <h3>DELETE</h3>
    <form id="delete-product-form" method="post">
        <input type="hidden" name="_method" value="DELETE">
        id: <input type="text" name="id" id="delete-product-id"><br><br>
        <input type="submit" value="DELETE product">
    </form>
    <br>
    <div>
        DELETE Result: <span id="delete-product-response"></span>
    </div>

    <hr>
    <hr>
    <hr>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="js/categories-rest.js"></script>
    <script src="js/products-rest.js"></script>

</body>
</html>

