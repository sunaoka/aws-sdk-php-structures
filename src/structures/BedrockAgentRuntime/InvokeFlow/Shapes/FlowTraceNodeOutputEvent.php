<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property list<FlowTraceNodeOutputField> $fields
 */
class FlowTraceNodeOutputEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     fields: list<FlowTraceNodeOutputField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
