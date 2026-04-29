<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GroundTruthTurnInput|null $input
 * @property EvaluationContent|null $expectedResponse
 */
class GroundTruthTurn extends Shape
{
    /**
     * @param array{
     *     input?: GroundTruthTurnInput|null,
     *     expectedResponse?: EvaluationContent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
