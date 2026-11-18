<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatasetSource $dataset
 * @property AgentInvocationConfig $agentInvocation
 */
class DatasetExecutionConfig extends Shape
{
    /**
     * @param array{
     *     dataset: DatasetSource,
     *     agentInvocation: AgentInvocationConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
