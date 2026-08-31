<?php
    return (object) array(
        "google_domain" => "com",
        "language" => "",
        "number_of_results" => 10,
        "default_theme" => "dark",
        "invidious_instance_for_video_results" => "https://invidious.snopyta.org",
        "disable_bittorrent_search" => false,
        "bittorrent_trackers" => "&tr=http://nyaa.tracker.wf:7777/announce&tr=udp://open.stealth.si:80/announce&tr=udp://open.stealth.si:80/announce",
        "disable_hidden_service_search" => false,
        "instance_fallback" => true,
        "request_cooldown" => 25,
        "cache_time" => 20,
        "disable_api" => false,
        "show_result_source" => true,
        "frontends" => array(),
        "preferred_engines" => array("text" => "bing"),
        "curl_settings" => array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:125.0) Gecko/20100101 Firefox/125.0",
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_WHATEVER,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_PROTOCOLS => CURLPROTO_HTTPS | CURLPROTO_HTTP,
            CURLOPT_REDIR_PROTOCOLS => CURLPROTO_HTTPS | CURLPROTO_HTTP,
            CURLOPT_MAXREDIRS => 5,
            CURLOPT_TIMEOUT => 3,
            CURLOPT_VERBOSE => false,
            CURLOPT_FOLLOWLOCATION => true
        )
    );
?>