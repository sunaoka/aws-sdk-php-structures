<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InvocationsPerInstance
 * @property int $ModelLatency
 */
class ScalingPolicyMetric extends Shape
{
    /**
     * @param array{
     *     InvocationsPerInstance?: int,
     *     ModelLatency?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
