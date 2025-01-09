<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RecommendedInferenceImage
 */
class OptimizationOutput extends Shape
{
    /**
     * @param array{RecommendedInferenceImage?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
