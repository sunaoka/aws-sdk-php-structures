<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HttpGatewayRouteHeader> $headers
 * @property GatewayRouteHostnameMatch $hostname
 * @property 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH' $method
 * @property HttpPathMatch $path
 * @property int $port
 * @property string $prefix
 * @property list<HttpQueryParameter> $queryParameters
 */
class HttpGatewayRouteMatch extends Shape
{
    /**
     * @param array{
     *     headers?: list<HttpGatewayRouteHeader>,
     *     hostname?: GatewayRouteHostnameMatch,
     *     method?: 'GET'|'HEAD'|'POST'|'PUT'|'DELETE'|'CONNECT'|'OPTIONS'|'TRACE'|'PATCH',
     *     path?: HttpPathMatch,
     *     port?: int,
     *     prefix?: string,
     *     queryParameters?: list<HttpQueryParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
