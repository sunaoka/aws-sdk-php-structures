<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcTimeout $grpc
 * @property HttpTimeout $http
 * @property HttpTimeout $http2
 * @property TcpTimeout $tcp
 */
class ListenerTimeout extends Shape
{
    /**
     * @param array{
     *     grpc?: GrpcTimeout,
     *     http?: HttpTimeout,
     *     http2?: HttpTimeout,
     *     tcp?: TcpTimeout
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
