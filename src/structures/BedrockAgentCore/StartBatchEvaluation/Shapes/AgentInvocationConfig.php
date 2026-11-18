<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentCoreRuntimeInvocation|null $agentCoreRuntime
 */
class AgentInvocationConfig extends Shape
{
    /**
     * @param array{agentCoreRuntime?: AgentCoreRuntimeInvocation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
