<?php

namespace Sunaoka\Aws\Structures\Keyspaces\GetTableAutoScalingSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $region
 * @property AutoScalingSpecification|null $autoScalingSpecification
 */
class ReplicaAutoScalingSpecification extends Shape
{
    /**
     * @param array{
     *     region?: string|null,
     *     autoScalingSpecification?: AutoScalingSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
