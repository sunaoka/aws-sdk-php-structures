<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $status
 * @property int $targetCapacity
 * @property int $minimumScalingStepSize
 * @property int $maximumScalingStepSize
 * @property int $instanceWarmupPeriod
 */
class ManagedScaling extends Shape
{
    /**
     * @param array{
     *     status?: 'ENABLED'|'DISABLED',
     *     targetCapacity?: int,
     *     minimumScalingStepSize?: int,
     *     maximumScalingStepSize?: int,
     *     instanceWarmupPeriod?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
