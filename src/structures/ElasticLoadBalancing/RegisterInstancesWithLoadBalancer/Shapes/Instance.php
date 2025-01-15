<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\RegisterInstancesWithLoadBalancer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 */
class Instance extends Shape
{
    /**
     * @param array{InstanceId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
