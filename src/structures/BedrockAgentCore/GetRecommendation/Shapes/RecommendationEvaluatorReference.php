<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evaluatorArn
 */
class RecommendationEvaluatorReference extends Shape
{
    /**
     * @param array{evaluatorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
