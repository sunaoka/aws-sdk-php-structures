<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property list<FlowTraceNodeInputField> $fields
 */
class FlowTraceNodeInputEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     fields: list<FlowTraceNodeInputField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
