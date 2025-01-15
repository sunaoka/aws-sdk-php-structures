<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GrpcTimeout|null $grpc
 * @property HttpTimeout|null $http
 * @property HttpTimeout|null $http2
 * @property TcpTimeout|null $tcp
 */
class ListenerTimeout extends Shape
{
    /**
     * @param array{
     *     grpc?: GrpcTimeout|null,
     *     http?: HttpTimeout|null,
     *     http2?: HttpTimeout|null,
     *     tcp?: TcpTimeout|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
