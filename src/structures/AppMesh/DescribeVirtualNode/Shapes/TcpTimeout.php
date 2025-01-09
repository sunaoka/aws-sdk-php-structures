<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Duration $idle
 */
class TcpTimeout extends Shape
{
    /**
     * @param array{idle?: Duration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
