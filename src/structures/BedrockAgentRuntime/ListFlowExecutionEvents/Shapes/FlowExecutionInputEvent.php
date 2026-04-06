<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FlowInputField> $fields
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class FlowExecutionInputEvent extends Shape
{
    /**
     * @param array{
     *     fields: list<FlowInputField>,
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
