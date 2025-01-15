<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceConfiguration|null $instance
 */
class Ec2InstanceConfiguration extends Shape
{
    /**
     * @param array{instance?: InstanceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
