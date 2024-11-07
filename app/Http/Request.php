<?php 

namespace App\Http;

class Request {
    private $http_method;
    private $uri;
    private $query_params = [];
    private $post_vars = [];
    private $headers = [];

    public function __construct()
    {
        $this->query_params = $_GET ?? [];
        $this->post_vars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->http_method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];

    }

    public function getHttpMethod() {
        return $this->http_method;
    }

    public function getUri() {
        return $this->uri;
    }

    public function getHeaders() {
        return $this->headers;
    }

    public function getQueryParams() {
        return $this->query_params;
    }
    public function getPostVars() {
        return $this->post_vars;
    }
}