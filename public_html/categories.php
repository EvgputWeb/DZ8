<?php

require_once "db.php";
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
        $category = Category::find($_REQUEST['id']);
        if (empty($category)) {
            http_response_code(404);
            echo json_encode(['result' => 'fail', 'message' => '404 not found']);
        } else {
            echo $category;
        }
    } else {
        echo Category::all();
    }
}

function responsePost()
{
    if (empty($_POST['name'])) {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'name' required"]);
    } else {
        $category = new Category();
        $category->name = $_POST['name'];
        $category->save();
        echo $category;
    }
}

function responseUpdate()
{
    if (!empty($_REQUEST['id'])) {
        $category = Category::find($_REQUEST['id']);
        if (empty($category)) {
            http_response_code(404);
            echo json_encode(['result' => 'fail', 'message' => 'Failed to update: 404 not found']);
        } else {
            if (!empty($_REQUEST['name'])) {
                $category->name = strip_tags($_REQUEST['name']);
                $category->save();
                echo $category;
            } else {
                http_response_code(400);
                echo json_encode(['result' => 'fail', 'message' => "Field 'name' required"]);
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
        $category = Category::find($_REQUEST['id']);
        if (empty($category)) {
            http_response_code(404);
            echo json_encode(['result' => 'fail', 'message' => 'Failed to delete: 404 not found']);
        } else {
            $category->delete();
            echo json_encode(['result' => 'success', 'message' => "Category deleted"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(['result' => 'fail', 'message' => "Field 'id' required"]);
    }
}


