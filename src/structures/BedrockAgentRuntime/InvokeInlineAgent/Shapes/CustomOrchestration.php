<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrchestrationExecutor|null $executor
 */
class CustomOrchestration extends Shape
{
    /**
     * @param array{executor?: OrchestrationExecutor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
