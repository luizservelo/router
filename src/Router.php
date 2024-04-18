<?php

namespace CoffeeCode\Router;

/**
 * Class CoffeeCode Router
 *
 * @author Robson V. Leite <https://github.com/robsonvleite>
 * @package CoffeeCode\Router
 */
class Router extends Dispatch
{
    /**
     * Router constructor.
     *
     * @param string $projectUrl
     * @param null|string $separator
     */
    public function __construct(string $projectUrl, ?string $separator = ":")
    {
        parent::__construct($projectUrl, $separator);
    }

    /**
     * @param string $route
     * @param callable|string $handler
     * @param string|null $name
     * @param array|string|null $middleware
     */
    public function get(
        string $route,
        callable|string $handler,
        string $name = null,
        array|string $middleware = null
    ): void {
        $this->addRoute("GET", $route, $handler, $name, $middleware);
        $this->addRoute("OPTIONS", $route, function ($data) {
            http_response_code(200);
            header('Access-Control-Allow-Credentials: true');
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS");
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
            header('Cache-Control: public, max-age=86400');
        });
    }

    /**
     * @param string $route
     * @param callable|string $handler
     * @param string|null $name
     * @param array|string|null $middleware
     */
    public function post(
        string $route,
        callable|string $handler,
        string $name = null,
        array|string $middleware = null
    ): void {
        $this->addRoute("POST", $route, $handler, $name, $middleware);
        $this->addRoute("OPTIONS", $route, function ($data) {
            http_response_code(200);
            header('Access-Control-Allow-Credentials: true');
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS");
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
            header('Cache-Control: public, max-age=86400');
        });
    }

    /**
     * @param string $route
     * @param callable|string $handler
     * @param string|null $name
     * @param array|string|null $middleware
     */
    public function put(
        string $route,
        callable|string $handler,
        string $name = null,
        array|string $middleware = null
    ): void {
        $this->addRoute("PUT", $route, $handler, $name, $middleware);
        $this->addRoute("OPTIONS", $route, function ($data) {
            http_response_code(200);
            header('Access-Control-Allow-Credentials: true');
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS");
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
            header('Cache-Control: public, max-age=86400');
        });
    }

    /**
     * @param string $route
     * @param callable|string $handler
     * @param string|null $name
     * @param array|string|null $middleware
     */
    public function patch(
        string $route,
        callable|string $handler,
        string $name = null,
        array|string $middleware = null
    ): void {
        $this->addRoute("PATCH", $route, $handler, $name, $middleware);
        $this->addRoute("OPTIONS", $route, function ($data) {
            http_response_code(200);
            header('Access-Control-Allow-Credentials: true');
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS");
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
            header('Cache-Control: public, max-age=86400');
        });
    }

    /**
     * @param string $route
     * @param callable|string $handler
     * @param string|null $name
     * @param array|string|null $middleware
     */
    public function delete(
        string $route,
        callable|string $handler,
        string $name = null,
        array|string $middleware = null
    ): void {
        $this->addRoute("DELETE", $route, $handler, $name, $middleware);
        $this->addRoute("OPTIONS", $route, function ($data) {
            http_response_code(200);
            header('Access-Control-Allow-Credentials: true');
            header("Access-Control-Allow-Origin: *");
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, PATCH, OPTIONS");
            header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
            header('Cache-Control: public, max-age=86400');
        });
    }
}
