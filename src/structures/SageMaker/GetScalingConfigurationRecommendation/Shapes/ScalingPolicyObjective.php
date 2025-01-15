<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MinInvocationsPerMinute
 * @property int|null $MaxInvocationsPerMinute
 */
class ScalingPolicyObjective extends Shape
{
    /**
     * @param array{
     *     MinInvocationsPerMinute?: int|null,
     *     MaxInvocationsPerMinute?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
