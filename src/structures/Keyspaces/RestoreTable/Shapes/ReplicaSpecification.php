<?php

namespace Sunaoka\Aws\Structures\Keyspaces\RestoreTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property int<1, max> $readCapacityUnits
 * @property AutoScalingSettings $readCapacityAutoScaling
 */
class ReplicaSpecification extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     readCapacityUnits?: int<1, max>,
     *     readCapacityAutoScaling?: AutoScalingSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
