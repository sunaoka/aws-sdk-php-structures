<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespace
 */
class EksInfo extends Shape
{
    /**
     * @param array{namespace?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
