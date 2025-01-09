<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinCapacity
 * @property int $MaxCapacity
 * @property int $ScaleInCooldown
 * @property int $ScaleOutCooldown
 * @property list<ScalingPolicy> $ScalingPolicies
 */
class DynamicScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: int,
     *     MaxCapacity?: int,
     *     ScaleInCooldown?: int,
     *     ScaleOutCooldown?: int,
     *     ScalingPolicies?: list<ScalingPolicy>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
