<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property string|null $Stat
 * @property string $Value
 * @property string|null $Unit
 */
class AIRecommendationPerformanceMetric extends Shape
{
    /**
     * @param array{
     *     Metric: string,
     *     Stat?: string|null,
     *     Value: string,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
