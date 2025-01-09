<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayGrpcConnectionPool $grpc
 * @property VirtualGatewayHttpConnectionPool $http
 * @property VirtualGatewayHttp2ConnectionPool $http2
 */
class VirtualGatewayConnectionPool extends Shape
{
    /**
     * @param array{
     *     grpc?: VirtualGatewayGrpcConnectionPool,
     *     http?: VirtualGatewayHttpConnectionPool,
     *     http2?: VirtualGatewayHttp2ConnectionPool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
