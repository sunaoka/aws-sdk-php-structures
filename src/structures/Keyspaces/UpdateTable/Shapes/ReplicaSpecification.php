<?php

namespace Sunaoka\Aws\Structures\Keyspaces\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property int<1, max>|null $readCapacityUnits
 * @property AutoScalingSettings|null $readCapacityAutoScaling
 */
class ReplicaSpecification extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     readCapacityUnits?: int<1, max>|null,
     *     readCapacityAutoScaling?: AutoScalingSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
