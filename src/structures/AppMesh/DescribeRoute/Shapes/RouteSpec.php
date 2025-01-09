<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcRoute $grpcRoute
 * @property HttpRoute $http2Route
 * @property HttpRoute $httpRoute
 * @property int<0, 1000> $priority
 * @property TcpRoute $tcpRoute
 */
class RouteSpec extends Shape
{
    /**
     * @param array{
     *     grpcRoute?: GrpcRoute,
     *     http2Route?: HttpRoute,
     *     httpRoute?: HttpRoute,
     *     priority?: int<0, 1000>,
     *     tcpRoute?: TcpRoute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
