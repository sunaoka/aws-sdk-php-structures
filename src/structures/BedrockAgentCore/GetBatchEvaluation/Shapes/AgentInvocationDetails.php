<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentCoreRuntimeInvocationDetails|null $agentCoreRuntime
 */
class AgentInvocationDetails extends Shape
{
    /**
     * @param array{agentCoreRuntime?: AgentCoreRuntimeInvocationDetails|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
