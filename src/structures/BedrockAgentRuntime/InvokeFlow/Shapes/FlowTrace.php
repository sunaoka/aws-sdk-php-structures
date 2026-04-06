<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTraceConditionNodeResultEvent|null $conditionNodeResultTrace
 * @property FlowTraceNodeInputEvent|null $nodeInputTrace
 * @property FlowTraceNodeOutputEvent|null $nodeOutputTrace
 */
class FlowTrace extends Shape
{
    /**
     * @param array{
     *     conditionNodeResultTrace?: FlowTraceConditionNodeResultEvent|null,
     *     nodeInputTrace?: FlowTraceNodeInputEvent|null,
     *     nodeOutputTrace?: FlowTraceNodeOutputEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
