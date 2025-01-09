<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinInvocationsPerMinute
 * @property int $MaxInvocationsPerMinute
 */
class ScalingPolicyObjective extends Shape
{
    /**
     * @param array{
     *     MinInvocationsPerMinute?: int,
     *     MaxInvocationsPerMinute?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
