<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property list<FlowInputField> $fields
 */
class FlowExecutionInputEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     fields: list<FlowInputField>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
