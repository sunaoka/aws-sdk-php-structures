<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTableAutoScalingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $region
 * @property AutoScalingSpecification $autoScalingSpecification
 */
class ReplicaAutoScalingSpecification extends Shape
{
    /**
     * @param array{
     *     region?: string,
     *     autoScalingSpecification?: AutoScalingSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
