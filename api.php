<?php
    // Allow browser-based clients such as Libre-UI to call the API directly.
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Accept, Origin");
    header("Access-Control-Max-Age: 86400");

    // Handle CORS preflight requests before loading the search engine.
    if ($_SERVER["REQUEST_METHOD"] === "OPTIONS") {
        http_response_code(204);
        exit();
    }

    require_once "misc/search_engine.php";
    require_once "locale/localization.php";

    $opts = load_opts();
    if ($opts->disable_api) {
        echo "<p>" . TEXTS["api_unavailable"] . "</p>";
        die();
    }

    require_once "misc/tools.php";

    if (!$opts->query) {
        echo "<p>Example API request: <a href=\"./api.php?q=gentoo&p=2&t=0\">./api.php?q=gentoo&p=2&t=0</a></p>
        <br/>
        <p>\"q\" is the keyword</p>
        <p>\"p\" is the result page (the first page is 0)</p>
        <p>\"t\" is the search type (0=text, 1=image, 2=video, 3=torrent, 4=tor)</p>
        <br/>
        <p>The results are going to be in JSON format.</p>
        <p>The API supports both POST and GET requests.</p>";

        die();
    }

    $results = fetch_search_results($opts, false);
    if (array_key_exists("error", $results)) {
        http_response_code(500);
    }
    header("Content-Type: application/json");
    echo json_encode($results);
?>
