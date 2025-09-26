<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTraceNodeInputEvent|null $nodeInputTrace
 * @property FlowTraceNodeOutputEvent|null $nodeOutputTrace
 * @property FlowTraceConditionNodeResultEvent|null $conditionNodeResultTrace
 * @property FlowTraceNodeActionEvent|null $nodeActionTrace
 * @property FlowTraceDependencyEvent|null $nodeDependencyTrace
 */
class FlowTrace extends Shape
{
    /**
     * @param array{
     *     nodeInputTrace?: FlowTraceNodeInputEvent|null,
     *     nodeOutputTrace?: FlowTraceNodeOutputEvent|null,
     *     conditionNodeResultTrace?: FlowTraceConditionNodeResultEvent|null,
     *     nodeActionTrace?: FlowTraceNodeActionEvent|null,
     *     nodeDependencyTrace?: FlowTraceDependencyEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
