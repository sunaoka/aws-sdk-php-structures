<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingSettings|null $writeCapacityAutoScaling
 * @property AutoScalingSettings|null $readCapacityAutoScaling
 */
class AutoScalingSpecification extends Shape
{
    /**
     * @param array{
     *     writeCapacityAutoScaling?: AutoScalingSettings|null,
     *     readCapacityAutoScaling?: AutoScalingSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
