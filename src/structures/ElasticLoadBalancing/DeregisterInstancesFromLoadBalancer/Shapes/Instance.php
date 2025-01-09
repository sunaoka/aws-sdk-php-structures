<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\DeregisterInstancesFromLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 */
class Instance extends Shape
{
    /**
     * @param array{InstanceId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
