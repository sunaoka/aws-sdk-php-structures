<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTrace $trace
 */
class FlowTraceEvent extends Shape
{
    /**
     * @param array{trace: FlowTrace} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
