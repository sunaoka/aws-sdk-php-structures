<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualGatewayGrpcConnectionPool|null $grpc
 * @property VirtualGatewayHttpConnectionPool|null $http
 * @property VirtualGatewayHttp2ConnectionPool|null $http2
 */
class VirtualGatewayConnectionPool extends Shape
{
    /**
     * @param array{
     *     grpc?: VirtualGatewayGrpcConnectionPool|null,
     *     http?: VirtualGatewayHttpConnectionPool|null,
     *     http2?: VirtualGatewayHttp2ConnectionPool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
