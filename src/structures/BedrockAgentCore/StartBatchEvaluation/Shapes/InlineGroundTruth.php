<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationContent>|null $assertions
 * @property EvaluationExpectedTrajectory|null $expectedTrajectory
 * @property list<GroundTruthTurn>|null $turns
 */
class InlineGroundTruth extends Shape
{
    /**
     * @param array{
     *     assertions?: list<EvaluationContent>|null,
     *     expectedTrajectory?: EvaluationExpectedTrajectory|null,
     *     turns?: list<GroundTruthTurn>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
