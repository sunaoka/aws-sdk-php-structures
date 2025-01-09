<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTraceConditionNodeResultEvent $conditionNodeResultTrace
 * @property FlowTraceNodeInputEvent $nodeInputTrace
 * @property FlowTraceNodeOutputEvent $nodeOutputTrace
 */
class FlowTrace extends Shape
{
    /**
     * @param array{
     *     conditionNodeResultTrace?: FlowTraceConditionNodeResultEvent,
     *     nodeInputTrace?: FlowTraceNodeInputEvent,
     *     nodeOutputTrace?: FlowTraceNodeOutputEvent
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
