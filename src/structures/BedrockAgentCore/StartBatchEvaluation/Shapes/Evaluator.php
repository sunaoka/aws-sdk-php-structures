<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $evaluatorId
 */
class Evaluator extends Shape
{
    /**
     * @param array{evaluatorId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
