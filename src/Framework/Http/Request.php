<?php

namespace Framework\Http;

//use Psr\Http\Message\RequestInterface;
//use Psr\Http\Message\StreamInterface;
//use Psr\Http\Message\UriInterface;

class Request
{
    private $queryParams, $parsedBody;

    public function __construct(array $queryParams = [], $parsedBody = null)
    {
        list($this->queryParams, $this->parsedBody) = [$queryParams, $parsedBody];
    }

    /**
     * @return array a-la GET
     */
    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    /**
     * a-la POST
     * @return array|null
     */
    public function getParsedBody()/*: array*/
    {
        return $this->parsedBody;
    }

    /**
     * Get a-la GET
     * @param array $queryParams
     * @return Request
     */
    public function withQueryParams(array $queryParams): self
    {
        $new = clone $this; //immutable
        $new->queryParams  = $queryParams;
        return $new;
    }

    /**
     * Set a-la POST
     * @param array $parsedBody
     * @return Request
     */
    public function withParsedBody(array $parsedBody): self
    {
        $new = clone $this; //immutable
        $new->parsedBody = $parsedBody;
        return $new;
    }
}
