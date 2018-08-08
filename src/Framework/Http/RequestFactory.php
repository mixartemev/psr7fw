<?php

namespace Framework\Http;

class RequestFactory
{
    public static function fromGlobals(array $query = /*[]*/null, $body = null)
    {
        return (new Request($query ?: $_GET, $body ?: $_POST));
    }
}
