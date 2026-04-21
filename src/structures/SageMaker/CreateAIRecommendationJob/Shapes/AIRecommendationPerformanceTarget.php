<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAIRecommendationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AIRecommendationConstraint> $Constraints
 */
class AIRecommendationPerformanceTarget extends Shape
{
    /**
     * @param array{Constraints: list<AIRecommendationConstraint>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
