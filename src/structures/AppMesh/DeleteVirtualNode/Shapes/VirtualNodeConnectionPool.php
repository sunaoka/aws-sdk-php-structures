<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualNodeGrpcConnectionPool $grpc
 * @property VirtualNodeHttpConnectionPool $http
 * @property VirtualNodeHttp2ConnectionPool $http2
 * @property VirtualNodeTcpConnectionPool $tcp
 */
class VirtualNodeConnectionPool extends Shape
{
    /**
     * @param array{
     *     grpc?: VirtualNodeGrpcConnectionPool,
     *     http?: VirtualNodeHttpConnectionPool,
     *     http2?: VirtualNodeHttp2ConnectionPool,
     *     tcp?: VirtualNodeTcpConnectionPool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
