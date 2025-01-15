<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetScalingConfigurationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InvocationsPerInstance
 * @property int|null $ModelLatency
 */
class ScalingPolicyMetric extends Shape
{
    /**
     * @param array{
     *     InvocationsPerInstance?: int|null,
     *     ModelLatency?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
