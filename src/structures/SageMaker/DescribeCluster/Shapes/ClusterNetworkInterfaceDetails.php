<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'efa'|'efa-only'|null $InterfaceType
 */
class ClusterNetworkInterfaceDetails extends Shape
{
    /**
     * @param array{InterfaceType?: 'efa'|'efa-only'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
