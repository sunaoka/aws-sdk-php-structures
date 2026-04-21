<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ttft-ms'|'throughput'|'cost' $Metric
 */
class AIRecommendationConstraint extends Shape
{
    /**
     * @param array{Metric: 'ttft-ms'|'throughput'|'cost'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
