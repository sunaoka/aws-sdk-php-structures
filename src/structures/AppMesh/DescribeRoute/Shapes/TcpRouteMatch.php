<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 65535> $port
 */
class TcpRouteMatch extends Shape
{
    /**
     * @param array{port?: int<1, 65535>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
