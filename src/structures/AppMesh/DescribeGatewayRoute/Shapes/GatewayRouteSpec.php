<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcGatewayRoute $grpcRoute
 * @property HttpGatewayRoute $http2Route
 * @property HttpGatewayRoute $httpRoute
 * @property int<0, 1000> $priority
 */
class GatewayRouteSpec extends Shape
{
    /**
     * @param array{
     *     grpcRoute?: GrpcGatewayRoute,
     *     http2Route?: HttpGatewayRoute,
     *     httpRoute?: HttpGatewayRoute,
     *     priority?: int<0, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
