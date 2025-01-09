<?php

namespace Sunaoka\Aws\Structures\Keyspaces\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property int $readCapacityUnits
 * @property AutoScalingSettings $readCapacityAutoScaling
 */
class ReplicaSpecification extends Shape
{
    /**
     * @param array{
     *     region: string,
     *     readCapacityUnits?: int,
     *     readCapacityAutoScaling?: AutoScalingSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
