<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxInvocations
 * @property list<ModelLatencyThreshold> $ModelLatencyThresholds
 * @property 'Continue'|'Stop' $FlatInvocations
 */
class RecommendationJobStoppingConditions extends Shape
{
    /**
     * @param array{
     *     MaxInvocations?: int,
     *     ModelLatencyThresholds?: list<ModelLatencyThreshold>,
     *     FlatInvocations?: 'Continue'|'Stop'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
