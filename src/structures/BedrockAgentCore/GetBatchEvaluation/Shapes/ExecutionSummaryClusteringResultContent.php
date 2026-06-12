<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ExecutionSummaryCluster> $executionSummaries
 */
class ExecutionSummaryClusteringResultContent extends Shape
{
    /**
     * @param array{executionSummaries: list<ExecutionSummaryCluster>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
