<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessLog $accessLog
 */
class Logging extends Shape
{
    /**
     * @param array{accessLog?: AccessLog} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
