<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'efa'|'efa-only'|null $InterfaceType
 */
class ClusterNetworkInterface extends Shape
{
    /**
     * @param array{InterfaceType?: 'efa'|'efa-only'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
