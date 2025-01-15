<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VirtualNodeGrpcConnectionPool|null $grpc
 * @property VirtualNodeHttpConnectionPool|null $http
 * @property VirtualNodeHttp2ConnectionPool|null $http2
 * @property VirtualNodeTcpConnectionPool|null $tcp
 */
class VirtualNodeConnectionPool extends Shape
{
    /**
     * @param array{
     *     grpc?: VirtualNodeGrpcConnectionPool|null,
     *     http?: VirtualNodeHttpConnectionPool|null,
     *     http2?: VirtualNodeHttp2ConnectionPool|null,
     *     tcp?: VirtualNodeTcpConnectionPool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
