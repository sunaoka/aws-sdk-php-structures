<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Duration $idle
 * @property Duration $perRequest
 */
class GrpcTimeout extends Shape
{
    /**
     * @param array{
     *     idle?: Duration,
     *     perRequest?: Duration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
