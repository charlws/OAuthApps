<?php
    $app_id = explode(".", $_SERVER['HTTP_HOST'])[0];
    $file_path = "./apps/" . $app_id . ".php";
    $request_uri = $_SERVER['REQUEST_URI'];

    if (file_exists($file_path)) {
        include $file_path;
        $response = array(
            "name" => $name,
            "description" => $description,
            "website" => $website,
            "callback_domain" => $callback_domain
        );
        if ($request_uri === '/') {
            header("Location: $website");
          } elseif ($request_uri === '/info') {
            header('Content-Type: application/json');
            echo json_encode($response);
          } else {
            http_response_code(404);
            echo "Not Found";
          }
    } else {
        echo "Application Not Found";
    }
?>
