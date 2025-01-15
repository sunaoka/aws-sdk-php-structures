<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MinCapacity
 * @property int|null $MaxCapacity
 * @property int|null $ScaleInCooldown
 * @property int|null $ScaleOutCooldown
 * @property list<ScalingPolicy>|null $ScalingPolicies
 */
class DynamicScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     MinCapacity?: int|null,
     *     MaxCapacity?: int|null,
     *     ScaleInCooldown?: int|null,
     *     ScaleOutCooldown?: int|null,
     *     ScalingPolicies?: list<ScalingPolicy>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
