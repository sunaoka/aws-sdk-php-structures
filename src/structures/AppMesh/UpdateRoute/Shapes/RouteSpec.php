<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcRoute $grpcRoute
 * @property HttpRoute $http2Route
 * @property HttpRoute $httpRoute
 * @property int $priority
 * @property TcpRoute $tcpRoute
 */
class RouteSpec extends Shape
{
    /**
     * @param array{
     *     grpcRoute?: GrpcRoute,
     *     http2Route?: HttpRoute,
     *     httpRoute?: HttpRoute,
     *     priority?: int,
     *     tcpRoute?: TcpRoute
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
