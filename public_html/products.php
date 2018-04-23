<?php

require_once "db.php";
require_once 'Product.php';
require_once 'Category.php';

$requestmethod = empty($_POST['_method']) ? strtoupper($_SERVER['REQUEST_METHOD']) : $_POST['_method'];

switch ($requestmethod) {
    case 'GET':
    default:
        responseGet();
        break;
    case 'POST':
        responsePost();
        break;
    case 'DELETE':
        responseDelete();
        break;
    case "PUT":
    case "PATCH":
        responseUpdate();
}


function responseGet()
{
    if (!empty($_REQUEST['id'])) {
        $product = Product::find($_REQUEST['id']);
        if (empty($product)) {
            http_response_code(404);
            echo json_encode(['result' => 'fail', 'message' => '404 not found']);
        } else {
            echo $product;
        }
    } else {
        echo Product::all();
    }
}

function responsePost()
{
    if (checkProductData())
    {
        $product = new Product();
        $product->name = strip_tags($_REQUEST['name']);
        $product->price = intval($_REQUEST['price']);
        $product->description = strip_tags($_REQUEST['description']);
        $product->category_id = intval($_REQUEST['category_id']);
        $product->save();
        echo $product;
    }
}

function responseUpdate()
{
    if (!empty($_REQUEST['id'])) {
        if (checkProductData()) {
            $product = Product::find($_REQUEST['id']);
            if (empty($product)) {
                http_response_code(404);
                echo json_encode(['result' => 'fail', 'message' => 'Failed to update: 404 not found']);
            } else {
                $product->name = strip_tags($_REQUEST['name']);
                $product->price = intval($_REQUEST['price']);
                $product->description = strip_tags($_REQUEST['description']);
                $product->category_id = intval($_REQUEST['category_id']);
                $product->save();
                echo $product;
            }
        }
    } else {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'id' required"]);
    }
}


function responseDelete()
{
    if (!empty($_REQUEST['id'])) {
        $product = Product::find($_REQUEST['id']);
        if (empty($product)) {
            http_response_code(404);
            echo json_encode(['result' => 'fail', 'message' => 'Failed to delete: 404 not found']);
        } else {
            $product->delete();
            echo json_encode(['result' => 'success', 'message' => "Product deleted"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'id' required"]);
    }
}


function checkProductData()
{
    if (empty($_REQUEST['name'])) {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'name' required"]);
        return false;
    }
    if (empty($_REQUEST['price'])) {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'price' required"]);
        return false;
    }
    if (empty($_REQUEST['description'])) {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'description' required"]);
        return false;
    }
    if (empty($_REQUEST['category_id'])) {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'category_id' required"]);
        return false;
    }
    $cat_id = $_REQUEST['category_id'];
    $category = Category::find($cat_id);
    if (empty($category)) {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Category with this id doesn't exist"]);
        return false;
    }
    return true;
}
