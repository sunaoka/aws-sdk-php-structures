<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LMI'|'VLLM'|null $Framework
 */
class AIRecommendationInferenceSpecification extends Shape
{
    /**
     * @param array{Framework?: 'LMI'|'VLLM'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
