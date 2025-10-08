<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $nodeName
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property NodeTraceElements $traceElements
 */
class NodeDependencyEvent extends Shape
{
    /**
     * @param array{
     *     nodeName: string,
     *     timestamp: \Aws\Api\DateTimeResult,
     *     traceElements: NodeTraceElements
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
