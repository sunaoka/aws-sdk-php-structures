<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property list<FlowTraceCondition> $satisfiedConditions
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class FlowTraceConditionNodeResultEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     satisfiedConditions: list<FlowTraceCondition>,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
