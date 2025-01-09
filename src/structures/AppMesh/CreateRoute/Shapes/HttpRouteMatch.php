<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HttpRouteHeader> $headers
 * @property 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH' $method
 * @property HttpPathMatch $path
 * @property int $port
 * @property string $prefix
 * @property list<HttpQueryParameter> $queryParameters
 * @property 'http'|'https' $scheme
 */
class HttpRouteMatch extends Shape
{
    /**
     * @param array{
     *     headers?: list<HttpRouteHeader>,
     *     method?: 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH',
     *     path?: HttpPathMatch,
     *     port?: int,
     *     prefix?: string,
     *     queryParameters?: list<HttpQueryParameter>,
     *     scheme?: 'http'|'https'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
