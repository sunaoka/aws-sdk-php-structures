<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<NodeOutputField> $fields
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 */
class NodeOutputEvent extends Shape
{
    /**
     * @param array{
     *     fields: list<NodeOutputField>,
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
