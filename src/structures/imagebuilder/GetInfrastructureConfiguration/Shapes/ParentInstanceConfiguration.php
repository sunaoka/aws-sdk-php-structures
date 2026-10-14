<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetInfrastructureConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingGroupConfiguration $autoScalingGroup
 */
class ParentInstanceConfiguration extends Shape
{
    /**
     * @param array{autoScalingGroup: AutoScalingGroupConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
