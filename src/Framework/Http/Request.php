<?php

namespace Framework\Http;

class Request
{
    /**
     * @return array
     */
    public function getQueryParams(): array
    {
        return $_GET;
    }

    /**
     *
     */
    public function getParsedBody()/*: array*/
    {
        return $_POST ?: null;
    }
}