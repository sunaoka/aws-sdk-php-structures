<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetFlowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $nodeName
 * @property 'ExecutionTimedOut'|null $error
 * @property string|null $message
 */
class FlowExecutionError extends Shape
{
    /**
     * @param array{
     *     nodeName?: string|null,
     *     error?: 'ExecutionTimedOut'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
