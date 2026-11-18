<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatasetDetails $dataset
 * @property AgentInvocationDetails $agentInvocation
 */
class DatasetExecutionDetails extends Shape
{
    /**
     * @param array{
     *     dataset: DatasetDetails,
     *     agentInvocation: AgentInvocationDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
