<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetFlowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExecutionTimedOut'|null $error
 * @property string|null $message
 * @property string|null $nodeName
 */
class FlowExecutionError extends Shape
{
    /**
     * @param array{
     *     error?: 'ExecutionTimedOut'|null,
     *     message?: string|null,
     *     nodeName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
