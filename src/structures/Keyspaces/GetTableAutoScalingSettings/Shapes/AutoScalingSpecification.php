<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTableAutoScalingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingSettings $writeCapacityAutoScaling
 * @property AutoScalingSettings $readCapacityAutoScaling
 */
class AutoScalingSpecification extends Shape
{
    /**
     * @param array{
     *     writeCapacityAutoScaling?: AutoScalingSettings,
     *     readCapacityAutoScaling?: AutoScalingSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
