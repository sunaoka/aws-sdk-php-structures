<?php

namespace Sunaoka\Aws\Structures\Lambda\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 15000>|null $MaxVCpuCount
 * @property 'Auto'|'Manual'|null $ScalingMode
 * @property list<TargetTrackingScalingPolicy>|null $ScalingPolicies
 */
class CapacityProviderScalingConfig extends Shape
{
    /**
     * @param array{
     *     MaxVCpuCount?: int<2, 15000>|null,
     *     ScalingMode?: 'Auto'|'Manual'|null,
     *     ScalingPolicies?: list<TargetTrackingScalingPolicy>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
