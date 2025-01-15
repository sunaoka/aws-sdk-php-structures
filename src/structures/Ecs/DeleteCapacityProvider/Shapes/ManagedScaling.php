<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $status
 * @property int<1, 100>|null $targetCapacity
 * @property int<1, 10000>|null $minimumScalingStepSize
 * @property int<1, 10000>|null $maximumScalingStepSize
 * @property int<0, 10000>|null $instanceWarmupPeriod
 */
class ManagedScaling extends Shape
{
    /**
     * @param array{
     *     status?: 'ENABLED'|'DISABLED'|null,
     *     targetCapacity?: int<1, 100>|null,
     *     minimumScalingStepSize?: int<1, 10000>|null,
     *     maximumScalingStepSize?: int<1, 10000>|null,
     *     instanceWarmupPeriod?: int<0, 10000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
