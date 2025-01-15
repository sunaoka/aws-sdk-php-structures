<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeInferenceRecommendationsJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaxInvocations
 * @property list<ModelLatencyThreshold>|null $ModelLatencyThresholds
 * @property 'Continue'|'Stop'|null $FlatInvocations
 */
class RecommendationJobStoppingConditions extends Shape
{
    /**
     * @param array{
     *     MaxInvocations?: int|null,
     *     ModelLatencyThresholds?: list<ModelLatencyThreshold>|null,
     *     FlatInvocations?: 'Continue'|'Stop'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
