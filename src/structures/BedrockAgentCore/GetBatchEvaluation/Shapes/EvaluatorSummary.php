<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $evaluatorId
 * @property EvaluatorStatistics|null $statistics
 * @property int|null $totalEvaluated
 * @property int|null $totalFailed
 */
class EvaluatorSummary extends Shape
{
    /**
     * @param array{
     *     evaluatorId?: string|null,
     *     statistics?: EvaluatorStatistics|null,
     *     totalEvaluated?: int|null,
     *     totalFailed?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
