<?php

namespace Sunaoka\Aws\Structures\EMRContainers\DescribeVirtualCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EksInfo $eksInfo
 */
class ContainerInfo extends Shape
{
    /**
     * @param array{eksInfo?: EksInfo} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
