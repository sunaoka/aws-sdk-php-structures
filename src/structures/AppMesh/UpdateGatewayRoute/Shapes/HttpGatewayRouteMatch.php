<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HttpGatewayRouteHeader>|null $headers
 * @property GatewayRouteHostnameMatch|null $hostname
 * @property 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH'|null $method
 * @property HttpPathMatch|null $path
 * @property int<1, 65535>|null $port
 * @property string|null $prefix
 * @property list<HttpQueryParameter>|null $queryParameters
 */
class HttpGatewayRouteMatch extends Shape
{
    /**
     * @param array{
     *     headers?: list<HttpGatewayRouteHeader>|null,
     *     hostname?: GatewayRouteHostnameMatch|null,
     *     method?: 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH'|null,
     *     path?: HttpPathMatch|null,
     *     port?: int<1, 65535>|null,
     *     prefix?: string|null,
     *     queryParameters?: list<HttpQueryParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
