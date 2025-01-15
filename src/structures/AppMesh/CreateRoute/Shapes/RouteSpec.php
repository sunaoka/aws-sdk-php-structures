<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcRoute|null $grpcRoute
 * @property HttpRoute|null $http2Route
 * @property HttpRoute|null $httpRoute
 * @property int<0, 1000>|null $priority
 * @property TcpRoute|null $tcpRoute
 */
class RouteSpec extends Shape
{
    /**
     * @param array{
     *     grpcRoute?: GrpcRoute|null,
     *     http2Route?: HttpRoute|null,
     *     httpRoute?: HttpRoute|null,
     *     priority?: int<0, 1000>|null,
     *     tcpRoute?: TcpRoute|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
