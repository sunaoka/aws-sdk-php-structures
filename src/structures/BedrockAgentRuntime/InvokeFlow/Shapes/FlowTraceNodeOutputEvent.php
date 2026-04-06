<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowTraceNodeOutputField> $fields
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class FlowTraceNodeOutputEvent extends Shape
{
    /**
     * @param array{
     *     fields: list<FlowTraceNodeOutputField>,
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
