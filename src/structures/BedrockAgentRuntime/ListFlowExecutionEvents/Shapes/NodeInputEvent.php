<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NodeInputField> $fields
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class NodeInputEvent extends Shape
{
    /**
     * @param array{
     *     fields: list<NodeInputField>,
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
