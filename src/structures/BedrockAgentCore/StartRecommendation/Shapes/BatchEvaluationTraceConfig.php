<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchEvaluationArn
 */
class BatchEvaluationTraceConfig extends Shape
{
    /**
     * @param array{batchEvaluationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
