<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HttpRouteHeader>|null $headers
 * @property 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH'|null $method
 * @property HttpPathMatch|null $path
 * @property int<1, 65535>|null $port
 * @property string|null $prefix
 * @property list<HttpQueryParameter>|null $queryParameters
 * @property 'http'|'https'|null $scheme
 */
class HttpRouteMatch extends Shape
{
    /**
     * @param array{
     *     headers?: list<HttpRouteHeader>|null,
     *     method?: 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH'|null,
     *     path?: HttpPathMatch|null,
     *     port?: int<1, 65535>|null,
     *     prefix?: string|null,
     *     queryParameters?: list<HttpQueryParameter>|null,
     *     scheme?: 'http'|'https'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
