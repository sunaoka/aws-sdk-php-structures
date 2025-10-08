<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowExecutionInputEvent|null $flowInputEvent
 * @property FlowExecutionOutputEvent|null $flowOutputEvent
 * @property NodeInputEvent|null $nodeInputEvent
 * @property NodeOutputEvent|null $nodeOutputEvent
 * @property ConditionResultEvent|null $conditionResultEvent
 * @property NodeFailureEvent|null $nodeFailureEvent
 * @property FlowFailureEvent|null $flowFailureEvent
 * @property NodeActionEvent|null $nodeActionEvent
 * @property NodeDependencyEvent|null $nodeDependencyEvent
 */
class FlowExecutionEvent extends Shape
{
    /**
     * @param array{
     *     flowInputEvent?: FlowExecutionInputEvent|null,
     *     flowOutputEvent?: FlowExecutionOutputEvent|null,
     *     nodeInputEvent?: NodeInputEvent|null,
     *     nodeOutputEvent?: NodeOutputEvent|null,
     *     conditionResultEvent?: ConditionResultEvent|null,
     *     nodeFailureEvent?: NodeFailureEvent|null,
     *     flowFailureEvent?: FlowFailureEvent|null,
     *     nodeActionEvent?: NodeActionEvent|null,
     *     nodeDependencyEvent?: NodeDependencyEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
