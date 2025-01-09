<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property int<1, 100> $targetCapacity
 * @property int<1, 10000> $minimumScalingStepSize
 * @property int<1, 10000> $maximumScalingStepSize
 * @property int<0, 10000> $instanceWarmupPeriod
 */
class ManagedScaling extends Shape
{
    /**
     * @param array{
     *     status?: 'ENABLED'|'DISABLED',
     *     targetCapacity?: int<1, 100>,
     *     minimumScalingStepSize?: int<1, 10000>,
     *     maximumScalingStepSize?: int<1, 10000>,
     *     instanceWarmupPeriod?: int<0, 10000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
