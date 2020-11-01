<?php

namespace Queliwrap\Core;

trait RequestMethods
{
    /**
     * Send GET request
     * @param string $url
     * @return TheClient
     */
    public static function get(string $url)
    {
        return static::request('GET', $url);
    }

    /**
     * Send HEAD request
     * @param string $url
     * @return TheClient
     */
    public static function head(string $url)
    {
        return static::request('HEAD', $url);
    }

    /**
     * Send POST request
     * @param string|callable $urlOrClosure
     * @return TheClient
     */
    public static function post($urlOrClosure)
    {
        return static::request('POST', $urlOrClosure);
    }

    /**
     * Send http put request
     * @param string $url
     * @return TheClient
     */
    public static function put(string $url)
    {
        return static::request('PUT', $url);
    }

    /**
     * Send http delete request
     * @param string $url
     * @return TheClient
     */
    public static function delete(string $url)
    {
        return static::request('DELETE', $url);
    }

    /**
     * Send http connect request
     * @param string $url
     * @return TheClient
     */
    public static function connect(string $url)
    {
        return static::request('CONNECT', $url);
    }

    /**
     * Send http options request
     * @param string $url
     * @return TheClient
     */
    public static function options(string $url)
    {
        return static::request('OPTIONS', $url);
    }

    /**
     * Send http trace request
     * @param string $url
     * @return TheClient
     */
    public static function trace(string $url)
    {
        return static::request('TRACE', $url);
    }

    /**
     * Send http patch request
     * @param string $url
     * @return TheClient
     */
    public static function patch(string $url)
    {
        return static::request('PATCH', $url);
    }

    /**
     * @param string $type
     * @param mixed ...$arguments
     * @return TheClient
     */
    private static function request(string $type, ...$arguments)
    {
        $parameters = [$type, ...$arguments];
        return (new TheClient())->request(...$parameters);
    }
}