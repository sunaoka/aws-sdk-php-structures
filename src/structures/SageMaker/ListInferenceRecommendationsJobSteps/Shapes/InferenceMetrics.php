<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxInvocations
 * @property int $ModelLatency
 */
class InferenceMetrics extends Shape
{
    /**
     * @param array{
     *     MaxInvocations: int,
     *     ModelLatency: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
