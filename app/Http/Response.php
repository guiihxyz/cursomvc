<?php 

namespace App\Http;

class Response {
    private $http_code = 200;
    private $headers = [];
    private $content_type = 'text/html';
    private $content;
    
    public function __construct($http_code, $content, $content_type = 'text/html') {
        $this->http_code = $http_code;
        $this->content = $content;
        $this->content_type = $content_type;
    }
}