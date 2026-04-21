<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SpeculativeDecoding'|'KernelTuning' $OptimizationType
 * @property array<string, string>|null $OptimizationConfig
 */
class AIRecommendationOptimizationDetail extends Shape
{
    /**
     * @param array{
     *     OptimizationType: 'SpeculativeDecoding'|'KernelTuning',
     *     OptimizationConfig?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
