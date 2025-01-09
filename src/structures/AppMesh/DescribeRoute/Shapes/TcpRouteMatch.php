<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $port
 */
class TcpRouteMatch extends Shape
{
    /**
     * @param array{port?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
