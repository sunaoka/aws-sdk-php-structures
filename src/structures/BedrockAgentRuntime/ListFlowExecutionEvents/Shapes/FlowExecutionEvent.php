<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionResultEvent|null $conditionResultEvent
 * @property FlowFailureEvent|null $flowFailureEvent
 * @property FlowExecutionInputEvent|null $flowInputEvent
 * @property FlowExecutionOutputEvent|null $flowOutputEvent
 * @property NodeActionEvent|null $nodeActionEvent
 * @property NodeDependencyEvent|null $nodeDependencyEvent
 * @property NodeFailureEvent|null $nodeFailureEvent
 * @property NodeInputEvent|null $nodeInputEvent
 * @property NodeOutputEvent|null $nodeOutputEvent
 */
class FlowExecutionEvent extends Shape
{
    /**
     * @param array{
     *     conditionResultEvent?: ConditionResultEvent|null,
     *     flowFailureEvent?: FlowFailureEvent|null,
     *     flowInputEvent?: FlowExecutionInputEvent|null,
     *     flowOutputEvent?: FlowExecutionOutputEvent|null,
     *     nodeActionEvent?: NodeActionEvent|null,
     *     nodeDependencyEvent?: NodeDependencyEvent|null,
     *     nodeFailureEvent?: NodeFailureEvent|null,
     *     nodeInputEvent?: NodeInputEvent|null,
     *     nodeOutputEvent?: NodeOutputEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
