<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TracePart>|null $agentTraces
 */
class TraceElements extends Shape
{
    /**
     * @param array{agentTraces?: list<TracePart>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
