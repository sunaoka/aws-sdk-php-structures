<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RecommendationEvaluatorReference> $evaluators
 */
class RecommendationEvaluationConfig extends Shape
{
    /**
     * @param array{evaluators: list<RecommendationEvaluatorReference>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
